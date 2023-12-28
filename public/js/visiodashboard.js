$(document).ready(function () {






    wiso_usage_data();
    get_language_data();
    get_survey_data();    
    get_finfo_data();



    window.satisfiedVar = 0;
    window.unsatisfiedVar= 0;
    window.qrVar= 0;
    window.inputVar= 0;
    window.arabic_dataVar= 0;
    window.english_dataVar= 0;
    









    // gloabal variable
    var grp1 = 0;
    var grp3 = 0;
    var grp5 = 0;
    var s = 0;
    var d = "wmdata";
    // AgeGroup(d);



    $('input').blur();
    // fetchdata();
    // totalTabdata();
    // resetV();

    // chart.destroy()
 

    
    Chart.register(ChartDataLabels);
// survey chart
    var xsValues = ["Satisfied", "Un-Satisfied"];
    var ysValues = [40, 60]; // Update with your numerical values
    var sbarColors = [
        "#25D366",
        "#ef4129"
    ];


    var surveyChart = new Chart("surveyChart", {
        type: "doughnut",
        data: {
            labels: xsValues,
            datasets: [{
                backgroundColor: sbarColors,
                data: ysValues,
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
                        size:7
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
 

    // langChart start
    var lxValues = ["Arabic", "English"];
    var lyValues = [63, 37]; // Update with your numerical values
    var lbarColors = [
        "#8068A4",
        "#76C0EA"
    ];
    var langChart = new Chart("langChart", {
        type: "pie",
        data: {
            labels: lxValues,
            datasets: [{
                backgroundColor: lbarColors,
                data: lyValues,
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


    // flightChart end
    var fxValues = ["Input", "Qr"];
    var fyValues = [65, 35]; // Update with your numerical values
    var fbarColors = [
        "#7ED63E",
        "#D6C152"
    ];
    var flightChart = new Chart("flightChart", {
        type: "doughnut",
        data: {
            labels: fxValues,
            datasets: [{
                backgroundColor: fbarColors,
                data: fyValues,
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
        // console.log("size = " + model + " " + exp + "  " + chrt);
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
        // console.log(data_type);
        // console.log("active panel = ", data_type);
        
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
                // console.log(response.output);
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
        
        e.preventDefault();

        
        var s = $('#startDate').val();
        var e = $('#endDate').val();
      
        if (e == "") {
            $('#endDate').focus();
            
          




        }
        if (s == "") {
            $('#startDate').focus();

        } else if (e != "" && s != "") {


             wiso_usage_data();
             get_finfo_data();
             get_language_data();
             get_survey_data();
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
        // console.log(getid)
        // console.log(myurl)
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
                // console.log(response.output)
              
                $.each(response.output, function (key, item) {
                    item = (item / sum) * 100;
                    mylist.push(Math.floor(item))

                });
                
                // $("#total_summary").text(formatNumber(sum))
                $('#loader').addClass('hide');
               // updateChart(mychart, mylist);
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

    $('#exptExcel').on('click', function () {
        var s = $('#startDate').val();
        var e = $('#endDate').val();
        if (s == "" && e == "") {
            s = "28-11-2023";
            e = new Date();
        }
        var total = $("#wiso_usage").text();
        var Take_me = $("#Take_me").text();
        var Support = $("#Support").text();
        var Free_Wifi = $("#Free_Wifi").text();
        var Airport_Guide = $("#Airport_Guide").text();
        var surveyData = $("#surveyData").text();
        var finfoData = $("#finfoData").text();

        var satisFied = $('.satis_data').attr('id');
  
        // var unsatisFied =$('.unsatis_data').attr('id');
   
        // var qrdata = $('.qrdata').attr('id');
 
        var inputdata = $('.inputdata').attr('id');
    
        var arabic_data = $('.arabic_data').attr('id');
     

        var english_data =  $('.english_data').attr('id');
     
        
      
    
        
        var data = [
            ['Start Date', s, '', '', 'End Date', e],
            ['', ''],
            ['Sr No.', 'Services', 'Usage'],
            [1, 'Take me', Take_me],
            [2, 'Support', Support],
            [3, 'Free Wifi', Free_Wifi],
            [4, 'Airport Guide', Airport_Guide],
            [5, 'Survey', surveyData],
            [6, 'Flight Information', finfoData],
            ['', ''],
            ['', 'Total', total],
            ['', ''],
            ['', ''],
            [5, 'Survey'],
            ['a', 'Satisfied', satisfiedVar],
            ['b', 'Un-Satisfied', unsatisfiedVar],
            ['', ''],
            ['', ''],
            [6, 'Flight Information'],
            ['a', 'QR', qrVar],
            ['b', 'Input', inputVar],
            ['', ''],
            ['', ''],
            ['', 'Language'],
            ['a', 'Arabic', arabic_dataVar],
            ['b', 'English', english_dataVar],
        ];
       
    
        // Create a new workbook
        var wb = XLSX.utils.book_new();
        var ws = XLSX.utils.aoa_to_sheet(data);
    
        // Add the worksheet to the workbook
        XLSX.utils.book_append_sheet(wb, ws, 'Sheet1');
    
        // Generate the XLSX file
        var wbout = XLSX.write(wb, { bookType: 'xlsx', type: 'binary' });
    
        function s2ab(s) {
            var buf = new ArrayBuffer(s.length);
            var view = new Uint8Array(buf);
            for (var i = 0; i < s.length; i++) view[i] = s.charCodeAt(i) & 0xFF;
            return buf;
        }
    
        // Trigger the file download
        var blob = new Blob([s2ab(wbout)], { type: 'application/octet-stream' });
        var link = document.createElement('a');
        link.href = URL.createObjectURL(blob);
        link.download = 'wisoRobot.xlsx'; // Change the filename as needed
        link.click();

    });
    
    
    
    

    function visio_overalldata() {

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
               // updateChart(mychart, mylist);
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
               // updateChart(mychart, mylist);
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
    function get_finfo_data() {
        var s = $('#startDate').val();
        var e = $('#endDate').val();
        if(s != "" && e != ""){
            var date = new Date(s);
            var currentTime = new Date();
            date.setHours(0);
            date.setMinutes(1);
            date.setSeconds(0);
            var year = date.getFullYear();
            var month = String(date.getMonth() + 1).padStart(2, '0');
            var day = String(date.getDate()).padStart(2, '0');
            var hours = String(date.getHours()).padStart(2, '0');
            var minutes = String(date.getMinutes()).padStart(2, '0');
            var seconds = String(date.getSeconds()).padStart(2, '0');
            var s = `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
            
 
           
        
            var edate = new Date(e);
            var currentTime = new Date();
            edate.setHours(23);
            edate.setMinutes(59);
            edate.setSeconds(59);
            var eyear = edate.getFullYear();
            var emonth = String(edate.getMonth() + 1).padStart(2, '0');
            var eday = String(edate.getDate()).padStart(2, '0');
            var ehours = String(edate.getHours()).padStart(2, '0');
            var eminutes = String(edate.getMinutes()).padStart(2, '0');
            var eseconds = String(edate.getSeconds()).padStart(2, '0');
            var e = `${eyear}-${emonth}-${eday} ${ehours}:${eminutes}:${eseconds}`;
            
  

        }
        $.ajax({
            type: "GET",
            url: "get_finfo_data",
            data: {
                's': s,
                'e': e,
            },
            dataType: 'json',
            success: function (response) {
             
                $("#flightinfo_nodata").addClass("hide");
        
                if (response && Object.keys(response).length > 0) {
                    console.log('Flight info:', response);
        
                    var mylist = [];
                    var sum = 0;
        
                    $.each(response, function (key, item) {
                        sum += item;
                        if (key === "QR") {
                            qrVar = item;
                        } else if (key === "Input") {
                            inputVar = item;
                        }
                    });
        
                    
                    if (!response.hasOwnProperty("QR")) {
                        qrVar = 0;
                    }
                    if (!response.hasOwnProperty("Input")) {
                        inputVar = 0;
                    }
        
                    $.each(response, function (key, item) {

                        item = (item / sum) * 100;
                            mylist.push(Math.floor(item));
                        
                    });

                    console.log(mylist)
                    updateChart(flightChart, mylist);
                } else {
                    updateChart(flightChart, [0, 0]);
                    $("#flightinfo_nodata").removeClass("hide");
                    console.log('No data or incorrect data For Flight info structure in response.');
                }
            },
            error: function (xhr, status, error) {
                console.log('Error:', status, error);
                // You may want to display a user-friendly error message here
            }
        });
    }


    function get_survey_data() {
        
  

        var s = $('#startDate').val();
        var e = $('#endDate').val();
        if(s != "" && e != ""){
            var date = new Date(s);
            var currentTime = new Date();
            date.setHours(0);
            date.setMinutes(1);
            date.setSeconds(0);
            var year = date.getFullYear();
            var month = String(date.getMonth() + 1).padStart(2, '0');
            var day = String(date.getDate()).padStart(2, '0');
            var hours = String(date.getHours()).padStart(2, '0');
            var minutes = String(date.getMinutes()).padStart(2, '0');
            var seconds = String(date.getSeconds()).padStart(2, '0');
            var s = `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
            
 
            console.log(s);
            
        
            var edate = new Date(e);
            var currentTime = new Date();
            edate.setHours(23);
            edate.setMinutes(59);
            edate.setSeconds(59);
            var eyear = edate.getFullYear();
            var emonth = String(edate.getMonth() + 1).padStart(2, '0');
            var eday = String(edate.getDate()).padStart(2, '0');
            var ehours = String(edate.getHours()).padStart(2, '0');
            var eminutes = String(edate.getMinutes()).padStart(2, '0');
            var eseconds = String(edate.getSeconds()).padStart(2, '0');
            var e = `${eyear}-${emonth}-${eday} ${ehours}:${eminutes}:${eseconds}`;
            
            // Log the formatted date-time string
            console.log(e);

        }

        $.ajax({
            type: "GET",
            url: "get_survey_data",
            data: {
                's': s,
                'e': e,
            },
            dataType: 'json',
            success: function (response) {
                $("#survey_nodata").addClass("hide");
                if (response && Object.keys(response).length > 0) {
                    console.log('Survey data:', response);
        
                    satisfiedVar = 0;
                    unsatisfiedVar = 0;
        
                    var mylist = [];
                    var sum = 0;
        
                    $.each(response, function (key, item) {
                        sum += item;
                        if (key === "Satisfied") {
                            satisfiedVar = item;
                        } else if (key === "Unsatisfied") {
                            unsatisfiedVar = item;
                        }
                    });
        
                    // Handling missing keys
                    if (!response.hasOwnProperty("Satisfied")) {
                        satisfiedVar = 0;
                    }
                    if (!response.hasOwnProperty("Unsatisfied")) {
                        unsatisfiedVar = 0;
                    }
        
                    $.each(response, function (key, item) {
                        item = (item / sum) * 100;
                        if (key === "Satisfied") {
                            $('#satisFied').attr('data-num', item);
                        } else {
                            $('#unsatisFied').attr('data-num', item);
                        }
                        mylist.push(Math.floor(item));
                    });
        
                    console.log('Survey list:', mylist);
                    updateChart(surveyChart, mylist);
                } else {
                    updateChart(surveyChart, [0, 0]);
                    $("#survey_nodata").removeClass("hide");
                 
                    console.log('survey No data or incorrect data structure in response.');
                }
            },
            error: function (xhr, status, error) {
                console.log('Error:', status, error);
                // Handle error or show appropriate message to the user
            }
        });
    }
    
    function wiso_usage_data() {

        var s = $('#startDate').val();
        var e = $('#endDate').val();
        if(s != "" && e != ""){
            var date = new Date(s);
            var currentTime = new Date();
            date.setHours(0);
            date.setMinutes(1);
            date.setSeconds(0);
            var year = date.getFullYear();
            var month = String(date.getMonth() + 1).padStart(2, '0');
            var day = String(date.getDate()).padStart(2, '0');
            var hours = String(date.getHours()).padStart(2, '0');
            var minutes = String(date.getMinutes()).padStart(2, '0');
            var seconds = String(date.getSeconds()).padStart(2, '0');
            var s = `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
            
 
           
            
        
            var edate = new Date(e);
            var currentTime = new Date();
            edate.setHours(23);
            edate.setMinutes(59);
            edate.setSeconds(59);
            var eyear = edate.getFullYear();
            var emonth = String(edate.getMonth() + 1).padStart(2, '0');
            var eday = String(edate.getDate()).padStart(2, '0');
            var ehours = String(edate.getHours()).padStart(2, '0');
            var eminutes = String(edate.getMinutes()).padStart(2, '0');
            var eseconds = String(edate.getSeconds()).padStart(2, '0');
            var e = `${eyear}-${emonth}-${eday} ${ehours}:${eminutes}:${eseconds}`;
            
            // Log the formatted date-time string
       

        }
        


     
        $.ajax({
            type: "GET",
            url: "get_wiso_data",
            data: {
                's': s,
                'e': e,
            },
            dataType: 'json',
            success: function (response) {
                console.log('robo usage-Response:', response);
                $("#robo_nodata").addClass("hide");
                if (response && Object.keys(response).length > 0) {
                    var mylist = [];
                    var sum = 0;
        
                    $.each(response, function (key, item) {
                        sum += item;
                        if (key === "Take_me") {
                            $("#Take_me").text(item);
                        } else if (key === "Support") {
                            $("#Support").text(item);
                        } else if (key === "Free_Wifi") {
                            $("#Free_Wifi").text(item);
                        } else if (key === "Airport_Guide") {
                            $("#Airport_Guide").text(item);
                        } else if (key === "Flight_Information") {
                            $("#finfoData").text(item);
                        } else if (key === "Survey") {
                            $("#surveyData").text(item);
                        }
                        mylist.push(item);
                    });
        
                    $("#wiso_usage").text(sum);
                    $("#langData").text(sum);
                    updateChart(WisoUsageChart, mylist);
                } else {
                    // If no data, display a message
                    
                    $("#robo_nodata").removeClass("hide");
                    updateChart(WisoUsageChart, [0, 0, 0, 0, 0, 0]);
                    // You might want to clear other fields or show appropriate messages for each
                    $("#wiso_usage").text("...");
                    $("#Take_me").text("...");
                    $("#Support").text("...");
                    $("#Free_Wifi").text("...");
                    $("#Airport_Guide").text("...");
                    $("#finfoData").text("...");
                    $("#surveyData").text("...");
                }
            },
            error: function (xhr, status, error) {
                console.log('Error:', error);
            }
        });
        
    }
     
    
    function get_language_data() {

        var s = $('#startDate').val();
        var e = $('#endDate').val();
        if(s != "" && e != ""){
            var date = new Date(s);
            var currentTime = new Date();
            date.setHours(0);
            date.setMinutes(1);
            date.setSeconds(0);
            var year = date.getFullYear();
            var month = String(date.getMonth() + 1).padStart(2, '0');
            var day = String(date.getDate()).padStart(2, '0');
            var hours = String(date.getHours()).padStart(2, '0');
            var minutes = String(date.getMinutes()).padStart(2, '0');
            var seconds = String(date.getSeconds()).padStart(2, '0');
            var s = `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
            
 
           
            
        
            var edate = new Date(e);
            var currentTime = new Date();
            edate.setHours(23);
            edate.setMinutes(59);
            edate.setSeconds(59);
            var eyear = edate.getFullYear();
            var emonth = String(edate.getMonth() + 1).padStart(2, '0');
            var eday = String(edate.getDate()).padStart(2, '0');
            var ehours = String(edate.getHours()).padStart(2, '0');
            var eminutes = String(edate.getMinutes()).padStart(2, '0');
            var eseconds = String(edate.getSeconds()).padStart(2, '0');
            var e = `${eyear}-${emonth}-${eday} ${ehours}:${eminutes}:${eseconds}`;
            
     
        }

        $.ajax({
            type: "GET",
            url: "get_language_data",
            data: {
                's': s,
                'e': e,               
            },
            dataType: 'json',
            success: function (response) {
                $("#lang_nodata").addClass("hide");
                if (response && Object.keys(response).length > 0) {
                    var mylist = [];
                    var sum = 0;
        
                    $.each(response, function (key, item) {
                        sum += item;
                        if (key === "AR") {
                            arabic_dataVar = item;
                            $('.arabic_data').attr('id', item);
                        } else {
                            english_dataVar = item;
                            $('.english_data').attr('id', item);
                        }
                    });
        

                    $.each(response, function (key, item) {
                        sum += item;
                        if (key === "AR") {
                            arabic_dataVar = item;
                        } else if (key === "EN") {
                            english_dataVar = item;
                        }
                    });
        
                    // Handling missing keys
                    if (!response.hasOwnProperty("AR")) {
                        arabic_dataVar = 0;
                    }
                    if (!response.hasOwnProperty("EN")) {
                        english_dataVar = 0;
                    }



                   
        
                    $.each(response, function (key, item) {
                        item = (item / sum) * 100;
                        mylist.push(Math.floor(item));
                    });
                    
                    updateChart(langChart, mylist);
                } else {
                    updateChart(langChart, [0, 0]);
                    $("#lang_nodata").removeClass("hide");
                    console.log('No data or incorrect data For Flight info structure in response.');
                }
            },
            error: function (xhr, status, error) {
                console.log('Error:', status, error);
                // Handle error or show appropriate message to the user
            }
        });
    }
    
    
   


    
    // wiso usage chart 

    var xlValues = ["Flight","Support","Survey","Wifi","Take_Me","Guide"];
    var ylValues = [338, 563, 195, 145, 632, 375]; // Update with your numerical values
    var lbarColors = [
        "#502c84",
        "#ef4129",
        "#f26122",
        '#C05120',
        '#2574bb',
        '#06a7e0'
    ];


    var WisoUsageChart = new Chart("WisoUsageChart", {
        type: "bar",
        data: {
            labels: xlValues,
            datasets: [{
                backgroundColor: lbarColors,
                data: ylValues,
                borderColor: 'rgb(75, 192, 192)',
                borderWidth: 0, // Remove the border lines behind the bars
                datalabels: {
                    display: false, // Set display to false to hide labels on bars
                }
            }]
        },
        options: {
            plugins: {
                title: {
                    display: false,
                    text: "Chart represent",
                    color: "white"
                },
                legend: {
                    display: false
                },
                tooltip: {
                    enabled: true
                }
            },
            scales: {
                x: {
                    grid: {
                        display: true // Remove x-axis grid lines
                    },
                    ticks: {
                        color: '#04615C' // Change x-axis label color
                    }
                },
                y: {
                    grid: {
                        display: true // Remove y-axis grid lines
                    },
                    ticks: {
                        color: '#04615C' // Change y-axis label color
                    }
                }
            }
        }
    });
    // wiso chart usage end



});
