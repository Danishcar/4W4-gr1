(function(){
    let burger = document.querySelector(".burger")
    burger.addEventListener('mousedown', function(){
        console.log("burger")
        this.classlist.add("burger__X")
    })
})()