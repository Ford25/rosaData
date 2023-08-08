

    const burger = document.getElementById('burger');
    const links = document.getElementById('links');

    burger.addEventListener('click', () => {
        links.classList.toggle('active');
    })

    $("#links").click(() => {
        links.classList.remove('active');
    })
