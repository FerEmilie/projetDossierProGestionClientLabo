var casper = require('casper').create();

casper.start('http://127.0.0.1:8000/liste', function() {
    this.echo(this.getTitle());
});

casper.thenOpen('http://127.0.0.1:8000/liste/materiel', function() {
    this.echo(this.getTitle());
});

casper.run();
