class MadeWithLove {
    constructor() {
        this.running = false;
        this.self = this;
    }

    run() {
        if(this.running) return;

        this.running = true;
        var i = 12;
        var loop = setInterval( _ => {
            this.createHeart(i%3);
            i--;
            if(!i) {
                this.running = false;
                clearInterval(loop) 
            };
        }, 200);  
    }
    
    createHeart(id) {
        var svg = document.getElementById("hearts");
        var newElement = document.createElementNS(
            "http://www.w3.org/2000/svg",
            "path"
        );
        newElement.setAttribute(
            "d",
            "M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z"
        );
        newElement.style.fill = "#f00";
        newElement.setAttribute("class", "float-" + id);
        svg.appendChild(newElement);
    }
}

export default MadeWithLove;