window.addEventListener('scroll',()=>{
    let content = document.querySelector('.how');
    let contentPosition = content.getBoundingClientRect().top;
    let screenPosition = window.innerHeight;
    if(contentPosition < screenPosition)
    {
        alert('hello');
        content.classList.add('active');
    }
});