const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        console.log(entry)
        if(entry.isIntersecting){
            entry.target.classList.add('move');
        } else{
            entry.target.classList.remove('move');
        }
    });
});


const hiddenElements = document.querySelectorAll('.page-two-bike');
hiddenElements.forEach((el) => observer.observe(el));

const observer2 = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        console.log(entry)
        if(entry.isIntersecting){
            entry.target.classList.add('show');
        } else{
            entry.target.classList.remove('show');
        }
    });
});

const hiddenElements2 = document.querySelectorAll('.page-three-map');
hiddenElements2.forEach((el) => observer2.observe(el));