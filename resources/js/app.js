import './bootstrap';
import 'preline';
import ApexCharts from 'apexcharts';

const options = {
  chart: {
    type: 'area',
    height: 350,
    fontFamily: 'Poppins'
  },
  series: [{
    name: 'Terangkut',
    data: [30, 40, 35, 50, 49, 60, 70, 91, 125],
    color: '#368666'
  },
 {
      name: 'Tidak Terangkut',
      data: [20, 30, 100, 40, 39, 50, 60, 120, 100],
      color: '#B5333D'
    },],
  xaxis: {
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
  },
  stroke: {
  curve: 'smooth',
}
};

const chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();


window.addEventListener('load', () => {
  (function() {
    const clearBtn = document.querySelector('#multiple-with-conditional-counter-trigger-clear');

    clearBtn.addEventListener('click', () => {
      const selectInstances = [
        HSSelect.getInstance('#kategoriFilter'),
        HSSelect.getInstance('#statusFilter')
      ];

      selectInstances.forEach(select => {
        if (select) {
          select.setValue([]);
        }
      });
    });
  })();
});

