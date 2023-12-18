// Dữ liệu thống kê sản phẩm

const productData = {
    labels: ['Chăn', 'Ga giường', 'Gối', 'Nệm'],
    datasets: [
        {
            data: [30, 25, 20, 15],
            backgroundColor: [
                'rgba(255, 99, 132, 0.7)',
                'rgba(54, 162, 235, 0.7)',
                'rgba(255, 206, 86, 0.7)',
                'rgba(75, 192, 192, 0.7)',
            ],
        },
    ],
};

// Tạo biểu đồ hình tròn
const ctx = document.getElementById('productChart').getContext('2d');
const productChart = new Chart(ctx, {
    type: 'doughnut',
    data: productData,
});

