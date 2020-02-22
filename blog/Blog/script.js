var app = document.getElementById('head');

var typewriter = new Typewriter(app,{loop: true
});

typewriter.typeString('Convert Your')
    .pauseFor(1500)
    // print(\n);
    .deleteAll()
    .typeString('<strong>Thinkings</strong>')
    .pauseFor(1500)
    .deleteAll()
    .typeString('into')
    .pauseFor(1500)
    // .deleteChars(7)
    .deleteAll()
    .typeString('<strong>BLOGS</strong>')
    .pauseFor(3500)
    .start();