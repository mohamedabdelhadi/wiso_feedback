$(document).ready(function () {

    // gloabal variable
    var grp1 = 0;
    var grp3 = 0;
    var grp5 = 0;
    var s = 0;
    var d = "wmdata";
    // AgeGroup(d);



    $('input').blur();
    fetchdata();
    totalTabdata();
    // resetV();

    // chart.destroy()
 
    var xValues = ["Good", "Average", "Bad"];
    var yValues = [40, 30, 30]; // Update with your numerical values
    var barColors = [
        "#7ED63E",
        "#D6C152",
        "#F05353"
    ];
    
    Chart.register(ChartDataLabels);
    
    var mychart = new Chart("myChart", {
        type: "doughnut",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues,
                borderColor: 'rgba(255, 255, 255, 0.2)',
                datalabels: {
                    color: 'white',
                    formatter: function (value, context) {
                        return context.chart.data.labels[context.dataIndex] + '\n' + value + '%';
                    }
                }
            }]
        },
        options: {
            plugins: {
                datalabels: {
                    anchor: 'center',
                    align: 'center',
                    offset: 0,
                    font: {
                        weight: 'bold',
                        size:15
                    }
                },
                title: {
                    display: false,
                    text: "Chart represent",
                    color: "#00c278"
                },
                legend: {
                    display: false
                }
            }
        }
    });
   
    
    $('#pdfSve').on('click', function () {
        let d = new Date().toISOString().split('T')[0];
        var model = $("#staticBackdrop").width();
        var exp = $(".chngsze").width();
        var chrt = $(".chngechrt").width();
        console.log("size = " + model + " " + exp + "  " + chrt);
        if (window.screen.width < 992) {
            var nmodel = 1536;
            var nexp = 400;
            var nchrt = 680;
            $("#root2").width(nmodel);
            $(".chngsze").width(nexp);
            $(".chngechrt").width(nchrt);


            html2canvas(document.querySelector("#root2"), {
                allowTaint: true,
                useCORS: true,
                scale: 1,
                background: "#fff"
            }).then(canvas => {
                $("#staticBackdrop").width(model);
                $(".chngsze").width(exp);
                $(".chngechrt").width(chrt);
                $(".btn-close").click();

                var img = canvas.toDataURL("image/png");
                var doc = new jsPDF('landscape');

                doc.addImage(img, 'PNG', 25, 15, 250, 135);
                doc.save('MCIT' + d);

            });

        } else {

            html2canvas(document.querySelector("#root2"), {
                allowTaint: true,
                useCORS: true,
                scale: 1,
                background: "#fff"
            }).then(canvas => {
                $(".btn-close").click();
                var img = canvas.toDataURL("image/png");
                var doc = new jsPDF('landscape');

                doc.addImage(img, 'PNG', 25, 15, 250, 175);
                doc.save('MCIT' + d);

                // $('.modal-content').addClass("modl");
            });
        }


    });
    // $('#exptPdf').on('click', function () {
    //     var data_type = $('.myactive').attr('id');
    //     console.log("active panel = ",data_type);
    //     if(data_type == "tabletOne"){

    //         excelurl = "exceltabOne";
    //     }else if(data_type == "tabletTwo"){

    //         excelurl = "exceltabTwo";
    //     }else if(data_type == "tabletThree"){

    //         excelurl = "exceltabThree";
    //     }else{
    //         excelurl = "excelAll";
    //     }
    //     let count = 1 
    //     $.ajax({
    //         type: "GET",
    //         url: excelurl,
    //         // url: "https://qltyss.com//matarat_feedback/"+ excelurl,
    //         dataType: 'json',
    //         success: function (response) {
    //             console.log(response.output);
    //             if (response.output && response.output.length > 0) {
    //                 const data = response.output.map(item => [
    //                     count,
    //                     getFeedbackLabel(item.feedback),
    //                     getTabletLabel(item.aid),
    //                     formatDate(item.created_at),
    //                    count++,
    //                 ]);
                    
    //                 const headings = ['Srno', 'Feedback', 'Tablet', 'Date'];
    //                 exportToExcel([headings, ...data]);
    //             } else {
    //                 console.log("No data received");
    //             }
    //         },
    //         error: function (error) {
    //             console.error("Error fetching data:", error);
    //         }
    //     });
    // });
    $('#exptPdf').on('click', function () {
        var s = $('#startDate').val();
        var e = $('#endDate').val();
        var data_type = $('.myactive').attr('id');
        console.log(data_type);
        console.log("active panel = ", data_type);
        
        let mydata = {
            'tab_type': data_type,
        };
        
        if (e !== "" && s !== "") {
            mydata = {
                's': s,
                'e': e,
                'tab_type': data_type,
            };
        }
    
        $.ajax({
            type: "GET",
            url: "excelgetData",
            // url: "https://qltyss.com/matarat_feedback/excelgetData",
            dataType: 'json',
            data: mydata,
            success: function (response) {
                console.log(response.output);
                if (response.output && response.output.length > 0) {
                    const data = response.output.map(item => [
                        '',
                        getFeedbackLabel(item.feedback),
                        getTabletLabel(item.aid),
                        formatDate(item.created_at)
                    ]);
    
                    let count = 1;
                    const formattedData = data.map(row => {
                        row[0] = count++;
                        return row;
                    });
    
                    const headings = ['Srno', 'Feedback', 'Tablet', 'Date'];
                    exportToExcel([headings, ...formattedData]);
                } else {
                    console.log("No data received");
                }
            },
            error: function (error) {
                console.error("Error fetching data:", error);
            }
        });
    });
    
    
    function formatDate(dateString) {
        const date = new Date(dateString);
        const options = {
            day: '2-digit',
            month: 'short',
            year: 'numeric',
            hour: 'numeric',
            minute: 'numeric',
            second: 'numeric',
            hour12: true
        };
        return date.toLocaleDateString('en-US', options);
    }
    
   
    function getFeedbackLabel(feedback) {
        switch (feedback) {
            case 1:
                return 'Good';
            case 2:
                return 'Average';
            case 3:
                return 'Bad';
            default:
                return 'Unknown';
        }
    }
    
    function getTabletLabel(tabletId) {
        switch (tabletId) {
            case 1:
                return 'Tablet One';
            case 2:
                return 'Tablet Two';
            case 3:
                return 'Tablet Three';
            default:
                return 'Unknown Tablet';
        }
    }
    
    
    
    
    function exportToExcel(data) {
        // Create a new workbook
        var wb = XLSX.utils.book_new();
    
        // Convert your data to worksheet format
        var ws = XLSX.utils.aoa_to_sheet(data);
    
        // Add the worksheet to the workbook
        XLSX.utils.book_append_sheet(wb, ws, "Sheet1");
    
        // Generate the Excel file
        var wbout = XLSX.write(wb, { bookType: "xlsx", type: "array" });
    
        // Trigger download
        var blob = new Blob([wbout], { type: "application/octet-stream" });
        var fileName = "kkia_feedback.xlsx";
    
        // Create an anchor element and simulate a click to trigger download
        var link = document.createElement("a");
        link.href = window.URL.createObjectURL(blob);
        link.download = fileName;
        link.click();
    }
    

    //change date start here
    $('.getdate').on('change', function (e) {
        $('html,body').animate({
            scrollTop: $(".chrtbx").offset().top
        },
            'smooth');
        e.preventDefault();
        var data_type = $('.myactive').attr('id');
        
        var s = $('#startDate').val();
        var e = $('#endDate').val();

        if (e == "") {
            $('#endDate').focus();

        }
        if (s == "") {
            $('#startDate').focus();

        } else if (e != "" && s != "") {

            $('#loader').removeClass('hide');
            $.ajax({
                type: "GET",
                url: "mataratbtwexpression",
                // url: "https://qltyss.com/matarat_feedback/mataratbtwexpression",
                data: {
                    's': s,
                    'e': e,
                    'tab_type':data_type,
                    // 'data_type': data_type,
                },
                dataType: 'json',
                success: function (response) {

                    mylist = []
                    var sum = 0;
                    $.each(response.output, function (key, item) {
                        sum = sum + item;
                        // mylist.push(item)

                    });
                    console.log("sum", sum)
                    if(sum == 0){
                        $("#nodataFound").removeClass("hide")
                        $(`#Happy`).text('0');
                        $(`#Neutral`).text('0');
                        $(`#Sad`).text('0');
                    }else{
                        $("#nodataFound").addClass("hide")
                    }
                    console.log(response.output)
                    // update data on totalone start here
                    if(data_type == "tabletOne"){

                        $("#total_tabone").text('')
                        $("#total_tabone").text(sum)
                    }else if(data_type == "tabletTwo"){

                        $("#total_tabtwo").text('')
                        $("#total_tabtwo").text(sum)
                    }else if(data_type == "tabletThree"){

                        $("#total_tabthree").text('')
                        $("#total_tabthree").text(sum)
                    }else if(data_type == "tabletThree"){

                        $("#total_tabthree").text('')
                        $("#total_tabthree").text(sum)
                    }else if(data_type == "totaldata"){

                        $("#total_summary").text('')
                        $("#total_summary").text(sum)
                    }


                    // update data on total one end here
                    $.each(response.output, function (key, item) {
                        item = (item / sum) * 100;
                        mylist.push(Math.floor(item))

                    });
                    
                    // $("#total_summary").text(formatNumber(sum))
                    $('#loader').addClass('hide');
                    updateChart(mychart, mylist);
                    $.each(response.output, function (key, item) {

                
                        if (key == 1) {
                            $(`#Happy`).text('');
                            $(`#Happy`).text(formatNumber(item));
                        } else if (key == 2) {
                            $(`#Neutral`).text('');
                            $(`#Neutral`).text(formatNumber(item));
                        } else if (key == 3) {

                            $(`#Sad`).text('');
                            $(`#Sad`).text(formatNumber(item));
                        }


                    });


                }
            });
        }

    });
    //change date end here
    //total start

    //total end
    //reset start
    $('#reset').on('click', function () {

        
        $(".box").addClass("revert-transform");
        $(".box").removeClass("bg-shadows");
        $(".toggle-shadow").closest(".box").removeClass("revert-transform");
        $("#totaldata").closest(".box").addClass("bg-shadows");


        $('#loader').removeClass('hide');
        $('html,body').animate({
            scrollTop: $(".chrtbx").offset().top
        },
            'smooth');
        $('#startDate').val('');
        $('#endDate').val('');
        fetchdata();
        totalTabdata();
    });

    $("#totaldata").on("click", function () {
        $('#loader').removeClass('hide');
        fetchdata();
    });

    $(".fetchId").on("click", function () {

        $('#loader').removeClass('hide');
        var getid = $(this).attr("id");

        if(getid == "tabletOne"){
            myurl = "gettabonedata";
        }else if(getid == "tabletTwo"){
            myurl = "gettabtwodata";
        }else if(getid == "tabletThree"){
            myurl = "gettabthreedata";
        }
        $('#startDate').val('');
        $('#endDate').val('');
        console.log(getid)
        console.log(myurl)
        $.ajax({
            type: "GET",
            url: myurl,
            // url: "https://qltyss.com/matarat_feedback/"+ myurl,
           
            dataType: 'json',
            success: function (response) {

                mylist = []
                var sum = 0;
                $.each(response.output, function (key, item) {
                    sum = sum + item;
                    // mylist.push(item)

                });
                console.log(response.output)
              
                $.each(response.output, function (key, item) {
                    item = (item / sum) * 100;
                    mylist.push(Math.floor(item))

                });
                
                // $("#total_summary").text(formatNumber(sum))
                $('#loader').addClass('hide');
                updateChart(mychart, mylist);
                $.each(response.output, function (key, item) {

            
                    if (key == 1) {
                        $(`#Happy`).text('');
                        $(`#Happy`).text(formatNumber(item));
                    } else if (key == 2) {
                        $(`#Neutral`).text('');
                        $(`#Neutral`).text(formatNumber(item));
                    } else if (key == 3) {

                        $(`#Sad`).text('');
                        $(`#Sad`).text(formatNumber(item));
                    }


                });

            }
        });
        
    });

    function fetchdata() {

        $('#startDate').val('');
        $('#endDate').val('');
        $.ajax({
            type: "GET",
            url: "mataratgetexpression",
            // url: "https://qltyss.com/matarat_feedback/mataratgetexpression",
            dataType: 'json',
            success: function (response) {

                mylist = []
                var sum = 0;
                $.each(response.output, function (key, item) {
                    sum = sum + item;
                    // mylist.push(item)

                });

                $.each(response.output, function (key, item) {
                    item = (item / sum) * 100;
                    mylist.push(Math.floor(item))

                });
                // console.log(mylist)
                // console.log("sum",sum)
                $("#total_summary").text(formatNumber(sum))
                $('#loader').addClass('hide');
                updateChart(mychart, mylist);
                $.each(response.output, function (key, item) {

            
                    if (key == 1) {
                        $(`#Happy`).text('');
                        $(`#Happy`).text(formatNumber(item));
                    } else if (key == 2) {
                        $(`#Neutral`).text('');
                        $(`#Neutral`).text(formatNumber(item));
                    } else if (key == 3) {

                        $(`#Sad`).text('');
                        $(`#Sad`).text(formatNumber(item));
                    }


                });
               

            }
        });
    }
    // get total tablet data 
    function totalTabdata() {


        $.ajax({
            type: "GET",
            url: "mataratgettabdata",
            // url: "https://qltyss.com/matarat_feedback/mataratgettabdata",
            dataType: 'json',
            success: function (response) {

               
                $('#loader').addClass('hide');
              
                $.each(response.output, function (key, item) {

                
                    if (key == 1) {
                        $(`#total_tabone`).text('');
                       
                        $(`#total_tabone`).text(`${formatNumber(item)}`);
                    } else if (key == 2) {
                        $(`#total_tabtwo`).text('');
                        $(`#total_tabtwo`).text(`${formatNumber(item)}`);
                    } else if (key == 3) {

                        $(`#total_tabthree`).text('');
                        $(`#total_tabthree`).text(`${formatNumber(item)}`);
                    }


                });
                

            }
        });
    }


    function displayNumbersUpTo(num) {
        let currentNumber = 1;
        
        function displayNumber() {
            $('#total_tabone').text(currentNumber);
            currentNumber++;
    
            if (currentNumber <= num) {
                setTimeout(displayNumber, 2); // Change the time interval as needed (in milliseconds)
            }
        }
    
        displayNumber();
    }


    function formatNumber(num) {
        if (num >= 1000000) {
            return (num / 1000000).toFixed(1) + 'M';
        } else if (num >= 1000) {
            return (num / 1000).toFixed(1) + 'K';
        } else {
            return num.toString();
        }
    }

    function resetV() {
        var v = ['1', '2', '3'];
        for (var i = 0; i < 3; i++) {
            var r = v[i];
            $(`#${r}`).text('');
        }
    }
    function putV() {

        var v = ['Happy', 'Neutral', 'Sad'];
        for (var i = 0; i < 3; i++) {
            var r = v[i];

            if ($(`#${r}`).text() == "") {
                $(`#${r}`).text('0%');
            }

        }
    }


    function updateChart(chart, newData) {

        chart.data.datasets[0].data = newData;
        chart.update();
        

    }





});
