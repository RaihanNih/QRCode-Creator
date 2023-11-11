document.getElementById('save').addEventListener('click', function() {
    const imageContainer = document.querySelector('.qrcode-container');
    const qrcodeName = document.querySelector(".qrcode-name").textContent.trim();

    const imageElement = imageContainer.querySelector('img');

    const imageUrl = imageElement.src;

    fetch(imageUrl)
        .then(response => response.blob())
        .then(blob => {
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = qrcodeName + '.png';
            document.body.appendChild(a);
            a.click();
            window.URL.revokeObjectURL(url);
        })
        .catch(error => console.error('Gagal mengunduh gambar:', error));
});

document.getElementById('back').addEventListener('click', function() {
    window.location = '/';
});