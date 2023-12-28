$(document).ready(function () {
  // gloabal variable
  // upload frames relative data start
  function showAlert(msg, status) {
    var alertBox = $("#messageBox");
    var iconcolor = $("#msgIconcol");
    $("#msgStatus").text(status);
   
    if(status == "Success"){
      alertBox.addClass("alertshow fade-in successborder");
      iconcolor.addClass("alertshow fade-in sucessMsg");
    }else{
      alertBox.addClass("alertshow fade-in failedborder");
      iconcolor.addClass("alertshow fade-in failedMsg");
    }
   
    $("#detectPerson").text(msg);
    setTimeout(function () {
        alertBox.removeClass("fade-in").addClass("fade-out");
    }, 3000);
    setTimeout(function () {
        alertBox.removeClass("alertshow fade-out");
    }, 3500);
}

// update status start
$(document).on('click', '.wbstatus', (event) => {
  const id = $(event.currentTarget).attr("id");
  const status = $(event.currentTarget).text().trim();
  const newStatus = (status === 'visible') ? 'invisible' : 'visible';

  const confirmed = window.confirm(`Are you sure you want to change the status to ${newStatus}?`);

  if (confirmed) {
      const csrfToken = $('meta[name="csrf-token"]').attr('content');
      $('#loader').removeClass('hide');
      $.ajax({
          url: `http://localhost:8080/kkia_dashboard/updateFrameStatus/${id}`,
          type: 'POST',
          data: {
              newStatus: newStatus,
              _token: csrfToken
          },
          success: (data) => {
            $('#loader').addClass('hide');
              showAlert("Status Successfully Updated","Success");
              console.log(data.message);
              
              $(event.currentTarget).text(newStatus)
            
              $(event.currentTarget).removeClass('bg-success bg-danger').addClass(newStatus === 'visible' ? 'bg-success' : 'bg-danger');
          },
          error: (error) => {
            showAlert("Error updating Frame Status","Failed");
            console.error('Error updating frame status:', error);
          }
      });
  }
});
// update status end

    
// deltet status start
$(document).on('click', '.delframe', (event) => {

const row = $(event.currentTarget).closest('tr');
  const id = $(event.currentTarget).attr("id");


  const confirmed = window.confirm(`Are you sure you want to Delete?`);

  if (confirmed) {
      const csrfToken = $('meta[name="csrf-token"]').attr('content');

      $.ajax({
          url: `http://localhost:8080/kkia_dashboard/delFrame/${id}`,
          type: 'POST',
          data: {
              
              _token: csrfToken
          },
          success: (data) => {
            showAlert("Frame Successfully Delete","Success");
            getFrames();
              console.log(data.message);
              row.remove();
              console.log("m going to upadte the frames")
              getFrames();
          },
          error: (error) => {
            showAlert("'Error deleting frame","Failed");
              console.error('Error deleting frame:', error);
          }
      });
  }
});
// delete status end

  $('#imageUploadForm').submit(function (e) {
    e.preventDefault();
    $('#loader').removeClass('hide');
    var formData = new FormData(this);
    console.log(formData)
    $.ajax({
        url: 'http://localhost:8080/kkia_dashboard/upload-image',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            if (response.success) {
              $('#loader').addClass('hide');
                $('#image').val('');
                // console.log('response.success')
                showAlert("Frame Successfully Uploaded","Success");
                // $('#preview').text("Frame Successfully Uploaded..")
                
                getFrames();
            } else {
                showAlert("Please Upload again !","Failed");
                console.error('Image upload failed.');
            }
        },
        error: function () {
            console.error('AJAX request failed.');
        }
    });
    
});


  // upload frames relative data end
  // get framrs start
  getFrames();

  // get frames end

  function getFrames() {
    console.log("ger frames is going to execute")
    $("#loader").removeClass("hide");
    $.ajax({
      url: "http://localhost:8080/kkia_dashboard/getFrames",
      type: "GET",
      success: function (response) {
        // console.log(response)
        var imageContainer = $("#slider");
        var counter = 0;
        response.frames.forEach(function (image) {
          counter = counter + 1;

          var div = $("<div>").addClass("img-slider").attr("id", image.f_id);

          var img = $("<img>").attr(
            "src",
            "facedetection1/public/filters/" + image.fname
          );
          if (counter == 1) {
            div.addClass("activeFrame");
          }

          div.append(img);

          imageContainer.append(div);
        });
        var grp1 = 0;
        var grp3 = 0;
        var grp5 = 0;
        var s = 0;
        var d = "wmdata";
        AgeGroup(d);
        $("input").blur();
        fetchdata();
        resetV();
        $("#loader").addClass("hide");
      },
      error: function (err) {
        console.error(err);
      },
    });
  }

  $("#pdfSve").on("click", function () {
    let d = new Date().toISOString().split("T")[0];
    var model = $("#staticBackdrop").width();
    var exp = $(".chngsze").width();
    var chrt = $(".chngechrt").width();
    // console.log("size = "+model+" "+exp+"  "+chrt);
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
        background: "#fff",
      }).then((canvas) => {
        $("#staticBackdrop").width(model);
        $(".chngsze").width(exp);
        $(".chngechrt").width(chrt);
        $(".btn-close").click();

        var img = canvas.toDataURL("image/png");
        var doc = new jsPDF("landscape");

        doc.addImage(img, "PNG", 25, 15, 250, 135);
        doc.save("MCIT" + d);
      });
    } else {
      html2canvas(document.querySelector("#root2"), {
        allowTaint: true,
        useCORS: true,
        scale: 1,
        background: "#fff",
      }).then((canvas) => {
        $(".btn-close").click();
        var img = canvas.toDataURL("image/png");
        var doc = new jsPDF("landscape");

        doc.addImage(img, "PNG", 25, 15, 250, 175);
        doc.save("MCIT" + d);

        // $('.modal-content').addClass("modl");
      });
    }
  });
  $("#exptPdf").on("click", function () {
    today = moment().format("MMMM Do YYYY");
    $(".dtenw").text(today);
    finfo = $("#filter_count").text()
    $("#FrameInfo").text(finfo);
    var activeFrameDiv = $(".activeFrame");
    var imgElement = activeFrameDiv.find("img");
    var imgSrc = imgElement.attr("src");

    $("#SelctFrame").attr("src", imgSrc);
    sndchart();
  });

  //change date start here
  $(".getdate").on("change", function (e) {
    $("html,body").animate(
      {
        scrollTop: $(".chrtbx").offset().top,
      },
      "smooth"
    );
    e.preventDefault();
    var data_type = $(".myactive").attr("id");
    var frameId = $(".activeFrame").attr("id");

    var s = $("#startDate").val();
    var e = $("#endDate").val();

    if (e == "") {
      $("#endDate").focus();
    }
    if (s == "") {
      $("#startDate").focus();
    } else if (e != "" && s != "") {
      $("#loader").removeClass("hide");
      $.ajax({
        type: "GET",
        url: "http://localhost:8080/kkia_dashboard/btwexpression",
        data: {
          s: s,
          e: e,
          data_type: data_type,
          f_id: frameId,
        },
        dataType: "json",
        success: function (response) {
          $("#loader").addClass("hide");
          // console.log(response.output);
          var sum = 0;
          $.each(response.output, function (key, item) {
            sum = sum + item;
          });
          if(sum == '0'){
            $("#nodataFound").removeClass('hide');
          }else{
            $("#nodataFound").addClass('hide');
          }
          //    console.log(sum);
          $("#filter_count").text();
          $("#filter_count").text(sum);
          resetV();
          $.each(response.output, function (key, item) {
            item = (item / sum) * 100;
            $(`#${key}`).text("");
            $(`#${key}`).text(`${Math.floor(item)}%`);
          });
          putV();
          AgeGroup(data_type);
        },
      });
    }
  });
  //change date end here
  //total start
  $("#wmdata").on("click", function () {
    $("html,body").animate(
      {
        scrollTop: $(".chrtbx").offset().top,
      },
      "smooth"
    );
    $("#startDate").val("");
    $("#endDate").val("");
    var d = "wmdata";
    var frameId = $(".activeFrame").attr("id");

    AgeGroup(d);
    $("#loader").removeClass("hide");
    $.ajax({
      type: "GET",
      url: "http://localhost:8080/kkia_dashboard/getexpression",
      data: {
        f_id: frameId,
      },
      dataType: "json",
      success: function (response) {
        $("#loader").addClass("hide");
        //   console.log(response.output);
        var sum = 0;
        $.each(response.output, function (key, item) {
          sum = sum + item;
        });
        if(sum == '0'){
          $("#nodataFound").removeClass('hide');
        }else{
          $("#nodataFound").addClass('hide');
        }
        //    console.log(sum);
        $("#filter_count").text();
        $("#filter_count").text(sum);
        $.each(response.output, function (key, item) {
          item = (item / sum) * 100;
          $(`#${key}`).text("");
          $(`#${key}`).text(`${Math.floor(item)}%`);
        });
        putV();
      },
    });
  });
  //total end
  //reset start
  $("#reset").on("click", function () {
    $("html,body").animate(
      {
        scrollTop: $(".chrtbx").offset().top,
      },
      "smooth"
    );
    $("#startDate").val("");
    $("#endDate").val("");
    var d = "wmdata";
    AgeGroup(d);
    $("#loader").removeClass("hide");
    $.ajax({
      type: "GET",
      url: "http://localhost:8080/kkia_dashboard/getexpression",
      dataType: "json",
      success: function (response) {
        $("#loader").addClass("hide");
        var sum = 0;
        $.each(response.output, function (key, item) {
          sum = sum + item;
        });

        $.each(response.output, function (key, item) {
          item = (item / sum) * 100;
          $(`#${key}`).text("");
          $(`#${key}`).text(`${Math.floor(item)}%`);
        });
        putV();
      },
    });
  });
  //reset end
  //get women data start here
  $("#Female").on("click", function () {
    $("html,body").animate(
      {
        scrollTop: $(".chrtbx").offset().top,
      },
      "smooth"
    );
    $("#startDate").val("");
    $("#endDate").val("");
    var filter_type = $(".activeFrame").attr("id");
    // console.log(filter_type)
    var d = "Female";
    $("#loader").removeClass("hide");
    AgeGroup(d);
    $.ajax({
      type: "GET",
      url: "http://localhost:8080/kkia_dashboard/womenexpression",
      data: {
        f_id: filter_type,
      },
      dataType: "json",
      success: function (response) {
        // console.log(response);
        $("#loader").addClass("hide");
        var sum = 0;
        $.each(response.output, function (key, item) {
          sum = sum + item;
        });
        if(sum == '0'){
          $("#nodataFound").removeClass('hide');
        }else{
          $("#nodataFound").addClass('hide');
        }
        //console.log(sum);
        $("#filter_count").text();
        $("#filter_count").text(sum);
        resetV();
        $.each(response.output, function (key, item) {
          item = (item / sum) * 100;
          $(`#${key}`).text("");
          $(`#${key}`).text(`${Math.floor(item)}%`);
        });
        putV();
      },
    });
  });

  //get women data end here
  //get men data start here
  $("#Male").on("click", function () {
    $("html,body").animate(
      {
        scrollTop: $(".chrtbx").offset().top,
      },
      "smooth"
    );
    $("#startDate").val("");
    $("#endDate").val("");
    var data_type = "Male";
    var filter_type = $(".activeFrame").attr("id");
    $("#loader").removeClass("hide");
    $.ajax({
      type: "GET",
      url: "http://localhost:8080/kkia_dashboard/menexpression",
      data: {
        f_id: filter_type,
      },
      dataType: "json",
      success: function (response) {
        // console.log(response);
        $("#loader").addClass("hide");
        var sum = 0;
        $.each(response.output, function (key, item) {
          sum = sum + item;
        });
        if(sum == '0'){
          $("#nodataFound").removeClass('hide');
        }else{
          $("#nodataFound").addClass('hide');
        }
        //console.log(sum);
        $("#filter_count").text();
        $("#filter_count").text(sum);
        resetV();
        $.each(response.output, function (key, item) {
          item = (item / sum) * 100;
          $(`#${key}`).text("");
          $(`#${key}`).text(`${Math.floor(item)}%`);
        });
        putV();
        AgeGroup(data_type);
      },
    });
  });

  //get men data end here
  //get frame data start here

  $(document).on("click", ".img-slider", function () {
    $("#loader").removeClass("hide");
    $("html,body").animate(
      {
        scrollTop: $(".chrtbx").offset().top,
      },
      "smooth"
    );
    $("#startDate").val("");
    $("#endDate").val("");
    const frameId = $(this).attr("id");
    var data_type = $(".myactive").attr("id");

    $(".img-slider").removeClass("activeFrame");

    // Add the class to the clicked image slider
    $(this).addClass("activeFrame");
    // console.log(frameId)
    // console.log(data_type)

    $.ajax({
      type: "GET",
      url: "http://localhost:8080/kkia_dashboard/frameData",
      data: {
        f_id: frameId,
        data_type: data_type,
      },
      dataType: "json",
      success: function (response) {
        $("#loader").addClass("hide");
        console.log(response);
        var sum = 0;
        $.each(response.output, function (key, item) {
          sum = sum + item;
        });
        if(sum == '0'){
          $("#nodataFound").removeClass('hide');
        }else{
          $("#nodataFound").addClass('hide');
        }
        console.log(sum);
        $("#filter_count").text();
        $("#filter_count").text(sum);
        resetV();
        $.each(response.output, function (key, item) {
          item = (item / sum) * 100;
          $(`#${key}`).text("");
          $(`#${key}`).text(`${Math.floor(item)}%`);
        });
        putV();
        AgeGroup(data_type);
      },
    });
  });

  //get frame data end here
  //main chart start here
  let p1 = {};

  function makeChart(grp1, grp3, grp5) {
    // console.log(`${grp5}`);
    if (grp1 == "NaN") {
      grp1 = 0;
    }
    if (grp3 === "NaN") {
      grp3 = 0;
    }
    if (grp5 == "NaN") {
      grp5 = 0;
    }

    var s = grp1 + grp3 + grp5;

    const data = {
      datasets: [
        {
          label: ["g1", "g2", "g3"],
          data: [grp1, grp3, grp5],
          backgroundColor: ["#535558", "#47C1BB", "#502C84"],
          borderColor: ["#207e7a"],
          borderWidth: 1,
          hoverOffset: 15,
        },
      ],
    };
    // config
    const config = {
      type: "doughnut",
      data,
      options: {
        events: ["click"],
        plugins: {
          tooltip: {
            enabled: false,
          },
          datalabels: {
            color: "white",
            align: "center",
            formatter: (value, context) => {
              grp11 = (grp1 / s) * 100;
              grp33 = (grp3 / s) * 100;
              grp55 = (grp5 / s) * 100;

              // console.log(`calcu => ${grp11}=${grp33}=${grp55}`);
              if (value == grp1) {
                const d1 = [`Age 18-25`, `${grp11.toFixed(1)}%`];

                if (grp1 <= 0) {
                  return "";
                } else {
                  return d1;
                }
              } else if (value == grp3) {
                const d3 = [`Age 25-40`, `${grp33.toFixed(1)}%`];

                if (grp3 <= 0) {
                  return "";
                } else {
                  return d3;
                }
              } else if (value == grp5) {
                const d5 = [`Age 40-60`, `${grp55.toFixed(1)}%`];

                if (grp5 <= 0) {
                  return "";
                } else {
                  return d5;
                }
              }
            },
          },
        },
      },
      plugins: [ChartDataLabels],
    };

    // render init block
    //to make myChart global i used window keyword
    window.myChart = new Chart(
      document.getElementById("myChart").getContext("2d"),
      config
    );
    //no need here to copy object to another object
    //    p1 = {
    //         ...myChart
    //     };

    chartColor = myChart.config.data.datasets[0]["backgroundColor"];
    //  console.log(myChart);
  }
  //main chart end here

  function fetchdata() {
    $("#loader").removeClass("hide");
    var frameId = $(".activeFrame").attr("id");
    console.log("frmae id", frameId);
    $.ajax({
      type: "GET",
      url: "http://localhost:8080/kkia_dashboard/getexpression",
      data: {
        f_id: frameId,
      },
      dataType: "json",
      success: function (response) {
        $("#loader").addClass("hide");
        console.log(response);
        var sum = 0;
        $.each(response.output, function (key, item) {
          sum = sum + item;
        });
        if(sum == '0'){
          $("#nodataFound").removeClass('hide');
        }else{
          $("#nodataFound").addClass('hide');
        }
        
        $("#filter_count").text();
        $("#filter_count").text(sum);
       
        $.each(response.output, function (key, item) {
          item = (item / sum) * 100;
          $(`#${key}`).text("");
          $(`#${key}`).text(`${Math.floor(item)}%`);
        });
        putV();
      },
    });
  }
  function resetV() {
    var v = ["Happy", "Neutral", "Fear", "Angry", "Surprise", "Sad"];
    for (var i = 0; i < 6; i++) {
      var r = v[i];
      $(`#${r}`).text("");
    }
  }
  function putV() {
    var v = ["Happy", "Neutral", "Fear", "Angry", "Surprise", "Sad"];
    for (var i = 0; i < 6; i++) {
      var r = v[i];

      if ($(`#${r}`).text() == "") {
        $(`#${r}`).text("0%");
      }
    }
  }
  //get total records according to age
  function AgeGroup(data_type) {
    let chartStatus = Chart.getChart("myChart"); // <canvas> id
    if (chartStatus != undefined) {
      chartStatus.destroy();
    }
    var s = $("#startDate").val();
    var e = $("#endDate").val();
    var frameId = $(".activeFrame").attr("id");
    // console.log(`${s}=${e}`);
    // console.log(`${frameId}`);
    $.ajax({
      type: "GET",
      url: "http://localhost:8080/kkia_dashboard/agecategory",
      data: {
        s: s,
        e: e,
        data_type: data_type,
        f_id: frameId,
      },
      dataType: "json",
      success: function (response) {
        console.log("age grp data="+response.output);

        grp1 = Math.floor(response.output[0]);
        grp3 = Math.floor(response.output[1]);
        grp5 = Math.floor(response.output[2]);
        //console.log("after math function "+grp1+"="+grp3+"="+grp5);
        makeChart(grp1, grp3, grp5);
      },
    });
  }
  //get total records end here

  //charts point star

  const ctx1 = document.getElementById("myChart");

  function clickHandler(click) {
    const points = myChart.getElementsAtEventForMode(
      click,
      "nearest",
      {
        intersect: true,
      },
      true
    );

    if (points[0]) {
      var sage = 0;
      var eage = 0;
      var age = points[0]["index"];
      if (age == 0) {
        sage = 18;
        eage = 25;
      } else if (age == 1) {
        sage = 26;
        eage = 40;
      }
      if (age == 2) {
        sage = 41;
        eage = 60;
      }
      var s = $("#startDate").val();
      var e = $("#endDate").val();

      var data_type = $(".myactive").attr("id");
      var filter_type = $(".activeFrame").attr("id");
        console.log('filer-id',filter_type);
      //   console.log(`${sage} + ${eage} + ${data_type}`);
      $.ajax({
        type: "GET",
        url: "http://localhost:8080/kkia_dashboard/paiexpression",
        data: {
          s: s,
          e: e,
          sage: sage,
          eage: eage,
          data_type: data_type,
          f_id: filter_type,
        },
        dataType: "json",
        success: function (response) {
          //   console.log(response.output);
          var sum = 0;
          $.each(response.output, function (key, item) {
            sum = sum + item;
          });
          resetV();
          $.each(response.output, function (key, item) {
            item = (item / sum) * 100;
            $(`#${key}`).text("");
            $(`#${key}`).text(`${Math.floor(item)}%`);
          });
          putV();
          //  AgeGroup(data_type);
        },
      });
    }
  }
  ctx1.onclick = clickHandler;
  //charts point end here
});
