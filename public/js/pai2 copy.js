
function sndchart(){
  let chartStatus = Chart.getChart("myChart2"); // <canvas> id
  if (chartStatus != undefined) {
    chartStatus.destroy();
  }
   
    var h =parseInt( $('#Happy').text());
    var sa = parseInt($('#Sad').text());
    var n = parseInt($('#Neutral').text());
    var a = parseInt($('#Angry').text());
    var s = parseInt($('#Surprise').text());
    var f =parseInt( $('#Fear').text());
    $('#h').text(h);
    $('#sa').text(sa);
    $('#n').text(n);
    $('#a').text(a);
    $('#s').text(s);
    $('#f').text(f);
   
    // if(h ="NaN"){
    //     h=0;
    // }else if(sa ="NaN"){
    //     sa=0;
    // }else if(n ="NaN"){
    //   n=0;
    // }else if(a ="NaN"){
    //   a=0;
    // }else if(s ="NaN"){
    //   s=0;
    // }else if(f ="NaN"){
    //   f=0;
    // }

    // console.log('h='+h,'sa='+sa,'n='+n,'a='+a,'s='+s,'f='+f);
    const data = {
        labels:['Happy','Sad','Neutral','Angry','Surprise','Fear'],
        datasets: [{      
        data: [h,sa,n,a,s,f],
        backgroundColor: [
      
            '#F9D45C',
            '#98D9D9',
            '#A989C5',
            '#C84A4B',
            '#7172AD',
            '#509EE3'
          ],
          borderColor: [
     
          ],
          borderWidth: 1
        }]
      };
      
      // myconfig 
      const config = {
        type: 'doughnut',
        data,
        options: {
          responsive:true,
          plugins:{
            tooltip:{
              enabled: false
            },
            labels: {
               render: 'label'
            },

          }
        },
        
      };
      
      //render init block
      const myChart2 = new Chart(
        document.getElementById('myChart2').getContext('2d'),
        config
      );
      setTimeout(
        function() {
          var canvas = document.getElementById('myChart2');         
          a= '395px';
          canvas.style.width = a;
          console.log(canvas.style.width);
        }, 500);
    }




  
  