var showBtn = document.getElementById('showBtn');
var content = document.getElementById('content');

showBtn.addEventListener('click', function() {
    content.classList.remove('hidden');
    showBtn.style.display = 'none';
    
});