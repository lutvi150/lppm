var Promise = window.Promise;
if (!Promise) {
    Promise = JSZip.external.Promise;
}

/**
 * Fetch the content and return the associated promise.
 * @param {String} url the url of the content to fetch.
 * @return {Promise} the promise containing the data.
 */
function urlToPromise(url) {
    return new Promise(function(resolve, reject) {
        JSZipUtils.getBinaryContent(url, function (err, data) {
            if(err) {
                reject(err);
            } else {
                resolve(data);
            }
        });
    });
}

var $form = $("#download_form").on("submit", function (e) {
    e.preventDefault();

    // resetMessage();

    var zip = new JSZip();

    // find every checked item
    $(this).find(":checked").each(function () {
        var $this = $(this);
        var url = $this.data("url");
        var filename = url.replace(/.*\//g, "");
        zip.file(filename, urlToPromise(url), {binary:true});
    });

    // // when everything has been downloaded, we can trigger the dl
    zip.generateAsync({type:"blob"}, function (metadata) {
        var msg = "progression : " + metadata.percent.toFixed(2) + " %";
        if(metadata.currentFile) {
            msg += ", current file = " + metadata.currentFile;
        }
        // console.log(msg);
        // updatePercent(metadata.percent|0);
        // saveAs(blob, "example.zip");
    })
    .then(function (blob) {

        // see FileSaver.js
        saveAs(blob, "example.zip");

        // console.log("done !");
    });
    // , function (e) {
    //     console.log(e);
    // });

    // return false;
});

/**
 * Reset the message.
 */
//  function resetMessage () {
//     $("#result")
//     .removeClass()
//     .text("");
// }
// /**
//  * show a successful message.
//  * @param {String} text the text to show.
//  */
// function showMessage(text) {
//     resetMessage();
//     $("#result")
//     .addClass("alert alert-success")
//     .text(text);
// }
// /**
//  * show an error message.
//  * @param {String} text the text to show.
//  */
// function showError(text) {
//     resetMessage();
//     $("#result")
//     .addClass("alert alert-danger")
//     .text(text);
// }
// /**
//  * Update the progress bar.
//  * @param {Integer} percent the current percent
//  */
// function updatePercent(percent) {
//     $("#progress_bar").removeClass("hide")
//     .find(".progress-bar")
//     .attr("aria-valuenow", percent)
//     .css({
//         width : percent + "%"
//     });
// }

// if(!JSZip.support.blob) {
//     showError("This demo works only with a recent browser !");
//     return false;
// }