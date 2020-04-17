

function handleFiles() {
    // csvs = '../csv-data/wtp_data.csv';
    
    let url = 'import_csv.php';
    // if (window.File && window.FileReader && window.FileList && window.Blob) {
        // if (csvs.indexOf(file.type) === -1) {
        //     alert("Please only upload CSV files.")
        // } else {
        	// $.blockUI();
        	// let timer = {
            // 	start: moment()
            // };
            Papa.parse(url, {
                "download": true,
                "header": true,
                "dynamicTyping": true,
                "complete": results => {
                    if ($.fn.DataTable.isDataTable("#wtp-data")) {
                        example.destroy();
                        $('#wtp-data').empty();
                    }
                    example = $("#wtp-data").DataTable({
                        "responsive": true,
                        "columns": results.meta.fields.map(c => ({
                            "title": c,
                            "data": c,
                            "visible": c.toLowerCase() !== "id",
                            "default": ""
                        })),
                        "data": results.data,
                        // "drawCallback": function(settings) {
                        // 	$.unblockUI();
                        //     timer.end = moment();
                        //     let duration = moment.duration(timer.end.diff(timer.start));
                        //     console.log("timer", timer);
                        //     console.log("duration", duration.asSeconds());
                        // }
                    });
                }
            });
        // }
    // }
}
