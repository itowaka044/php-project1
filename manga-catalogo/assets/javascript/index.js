//função para o nav mobile (quebra em 600px):

function openNav() {
    const headerMobile = document.getElementById('header_mobile');

    if (headerMobile.style.opacity === '0' || headerMobile.style.opacity === '') {
        headerMobile.style.display = 'flex'; 
        setTimeout(() => {
            headerMobile.style.opacity = '1'; 
            headerMobile.style.transform = 'translateX(0)'; 
        }, 10); 
    } else {
        headerMobile.style.opacity = '0'; 
        headerMobile.style.transform = 'translateX(100%)'; 
        setTimeout(() => {
            headerMobile.style.display = 'none';
        }, 500); 
    }
}


//função para pesquisar item:

document.getElementById('search_item').addEventListener('input', function() {
    const search = this.value.toLowerCase();
    const mangaIcon = document.querySelectorAll('.manga_icon');
    let itemFound = 0;

    mangaIcon.forEach(manga => {
        const title = manga.querySelector('h3').textContent.toLowerCase();

        if(title.includes(search)){
            manga.style.display = '';
            itemFound++;
        } else {
            manga.style.display = 'none';
        }

    });

    if(itemFound == 0){
        alert('Nenhum mangá encontrado');
}
});


//testar js:
console.log("javascript carregado");