const data = {

  datasets: [{
    label: ['g1','g2','g3'],
    data: [15, 12, 6],
    backgroundColor: [

      '#F9D45C',
      '#A989C5',
      '#7172AD'
    ],
    borderColor: [
    ],
    borderWidth: 1,
    hoverOffset:15
  }]
};

// config 
const config = {
  type: 'doughnut',
  data,
  options: {
    events:['click'],
    plugins:{
      tooltip:{
        enabled: false
      },
      datalabels:{
        color: 'white',
        formatter:(value, context)=>{

          if(value == 15){
            return "Age 18-25"
          }else if (value == 12){
            return "Age 25-40"
          }else if (value == 6){
            return "Age 40-60"
          }          
        }
      }
    }
  },
  plugins:[ChartDataLabels]
};

// render init block
const myChart = new Chart(
  document.getElementById('myChart').getContext('2d'),
  config
  
);

//click events to get the age group
      //const dataset = points[0].datasetIndex;
      // const datapoint = points[0].Index;
var ctx1 = document.getElementById("myChart");

function clickHandler(click){
  
  const points = myChart.getElementsAtEventForMode(click, 'nearest',{
        intersect :true}, true);
    
    if(points[0]){
      var sage=0;
      var eage=0;
      var age = points[0]['index'];
      if(age == 0){
            sage = 18;
            eage = 25;     
    }else if(age == 1){
            sage = 25;
            eage = 40; 
    }if(age == 2){
            sage = 40;
            eage = 60;
    }
    var s = $('#startDate').val();
    var e = $('#endDate').val();


    var data_type=$('.myactive').attr('id');
    console.log(`${sage} + ${eage} + ${data_type}`);
    //   $.ajax({
    //     type: "GET",
    //     url: "/paiexpression",
    //     data:{
    //         's':s,
    //         'e':e,
    //         'sage':sage,
    //         'eage':eage,
    //         'data_type':data_type,
    //     },
    //     dataType: 'json',
    //     success: function(response)
    //     {

    //     var sum=0;
    //            $.each(response.output, function(key,item){
    //                 sum =sum + item;
    //            });
    //            resetV();
    //            $.each(response.output, function(key,item){
    //                 item = (item/sum)*100;   
    //                 $(`#${key}`).text('');
    //                 $(`#${key}`).text(`${Math.floor(item)}%`);
    //            });
    //            putV();
               

    //     }
    // });
  }
}
ctx1.onclick = clickHandler;























// const hap = 33;
// const neut = 33;
// const sur= 33;



// var ctx = document.getElementById('myChart').getContext('2d');

// var myChart = new Chart(ctx, {
//     type: 'doughnut',
//     data: {
//         // labels: ['Happy', 'Neutral', 'Surprise', 'Disgust', 'Angry', 'Sad', 'Fear'],
//          labels: [],
//         datasets: [{
//           data: [50, 60, 70],
//             label:'labesl',
//             backgroundColor: [
//                 '#F9D45C',
//                 '#A989C5',
//                 '#7172AD'
//             ],
//             borderWidth: 1
//         }]
//     },
//     options: {
//       responsive: true,
//       plugins: {
//         tooltip: {
//           // enabled: true // <-- this option disables tooltips
//              callbacks:{
//                 label:(context)=>{
//                   if(context.parsed == 50){
//                     return `Age 18-25`;
//                   }else if(context.parsed == 60){
//                     return `Age 25-40`;
//                   }else{
//                     return `Age 40-60`;
//                   }
                
//                 }
//              }
//         },
//         datalabels:{
//           formatter:(value, context)=>{
//             console.log('hi'); 
//             return "hello";
//           }
//         }
//       }
//     }
    
// });

