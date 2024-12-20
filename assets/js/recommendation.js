fetch('../../user/order_management/recommendation.php')
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.text();
  })
  .then(data => {
    document.getElementById('catalog').innerHTML = data; // Insert recommendation HTML
  })
  .catch(error => {
    console.error('There has been a problem with your fetch operation:', error);
  });

document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.card-title').forEach(function(element) {
    const originalText = element.innerText;
    if (originalText.length > 13) {
      element.innerText = originalText.substring(0, 13) + '...';
    }
  });
});
