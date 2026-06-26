window.onload = () => {

    confetti({
        particleCount: 200,
        spread: 120,
        origin: {
            y: 0.6
        }
    })

}
const canvas = document.getElementById("stars")
const ctx = canvas.getContext("2d")

canvas.width = window.innerWidth
canvas.height = window.innerHeight

let stars = []

for (let i = 0; i < 120; i++) {

    stars.push({
        x: Math.random() * canvas.width,
        y: Math.random() * canvas.height,
        size: Math.random() * 2,
        speed: Math.random() * 0.3
    })

}

function animate() {

    ctx.clearRect(0, 0, canvas.width, canvas.height)

    stars.forEach(star => {

        ctx.fillStyle = "white"
        ctx.beginPath()
        ctx.arc(star.x, star.y, star.size, 0, Math.PI * 2)
        ctx.fill()

        star.y += star.speed

        if (star.y > canvas.height) {
            star.y = 0
        }

    })

    requestAnimationFrame(animate)

}

animate()

tsParticles.load("particles", {
    particles: {
        number: {
            value: 60
        },
        size: {
            value: 3
        },
        move: {
            speed: 1
        },
        links: {
            enable: true,
            color: "#ffffff"
        },
        color: {
            value: "#ffffff"
        }
    },
    background: {
        color: "transparent"
    }
})




function setEra(era) {
    switch (era) {
        case "lover":
            document.body.style.background = "linear-gradient(135deg,#ff9ecf,#ff4da6)";
            break;

        case "folklore":
            document.body.style.background = "linear-gradient(135deg,#d1d5db,#6b7280)";
            break;

        case "1989":
            document.body.style.background = "linear-gradient(135deg,#7dd3fc,#38bdf8)";
            break;

        case "reputation":
            document.body.style.background = "linear-gradient(135deg,#000000,#1f2937)";
            break;

        case "midnights":
            document.body.style.background = "linear-gradient(135deg,#1e1b4b,#4338ca)";
            break;

        case "red":
            document.body.style.background = "linear-gradient(135deg,#ef4444,#7f1d1d)";
            break;

        case "fearless":
            document.body.style.background = "linear-gradient(135deg,#facc15,#f59e0b)";
            break;

        case "speaknow":
            document.body.style.background = "linear-gradient(135deg,#a855f7,#6b21a8)";
            break;

        case "evermore":
            document.body.style.background = "linear-gradient(135deg,#b45309,#78350f)";
            break;

        case "debut":
            document.body.style.background = "linear-gradient(135deg,#9acd32,#2e8b57)";
            break;

        case "ttpd":
            document.body.style.background = "linear-gradient(135deg,#f5f5f4,#a8a29e)";
            break;
        case "showgirl":
            document.body.style.background = "linear-gradient(135deg,#FB923C,#F97F1C)";
            break;
    }
}


function reveal() {

    let elements = document.querySelectorAll(".reveal")

    elements.forEach(el => {

        let windowHeight = window.innerHeight
        let elementTop = el.getBoundingClientRect().top

        if (elementTop < windowHeight - 100) {

            el.classList.add("active")

        }

    })

}

window.addEventListener("scroll", reveal)

let slides = document.querySelectorAll(".slide")
let index = 0

setInterval(() => {

    slides[index].style.opacity = 0
    index = (index + 1) % slides.length
    slides[index].style.opacity = 1

}, 4000)


const card = document.querySelector(".card-3d");
const glare = document.querySelector(".glare");

card.addEventListener("mousemove", (e) => {
    const rect = card.getBoundingClientRect();

    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    const centerX = rect.width / 2;
    const centerY = rect.height / 2;

    const rotateX = -(y - centerY) / 10;
    const rotateY = (x - centerX) / 10;

    card.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;

    glare.style.opacity = "1";
    glare.style.background = `radial-gradient(circle at ${x}px ${y}px, rgba(255,255,255,0.5), transparent)`;
});

card.addEventListener("mouseleave", () => {
    card.style.transform = "rotateX(0deg) rotateY(0deg)";
    glare.style.opacity = "0";
});
const header = document.getElementById('mainHeader');

window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        header.classList.add('bg-white', 'shadow-md');
        header.classList.remove('bg-white/60');
    } else {
        header.classList.remove('bg-white', 'shadow-md');
        header.classList.add('bg-white/60');
    }
});

document.addEventListener("DOMContentLoaded", () => {

    const items = document.querySelectorAll('.timeline-item');
    const line = document.getElementById('timeline-line');

    // animação dos cards
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {

                // delay progressivo (fica bonito demais)
                setTimeout(() => {
                    entry.target.classList.add('show');
                }, index * 150);

            }
        });
    }, {
        threshold: 0.2
    });

    items.forEach(item => {
        observer.observe(item);
    });


    // animação da linha crescendo
    window.addEventListener('scroll', () => {

        const section = document.querySelector('#timeline');
        const rect = section.getBoundingClientRect();
        const windowHeight = window.innerHeight;

        // calcula quanto da section já apareceu
        let progress = (windowHeight - rect.top) / (rect.height + windowHeight);

        // limita entre 0 e 1
        progress = Math.max(0, Math.min(1, progress));

        // aplica altura
        line.style.height = progress * 100 + "%";

    });

});