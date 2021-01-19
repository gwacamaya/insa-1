const isPair = require('../js/isPair')
var expect = require('expect.js')

describe('isPair function', function() {
    describe('Type', function() {
      it('should expose a function', function() {
        expect(isPair).to.be.a('function');
       });
    });

    describe('Return Type', function() {
        it('should expose a boolean', function() {
          expect(isPair(5)).to.be.a('boolean');
         });
      });

    
      describe('Check pair number', function() {
        it('should expose true', function() {
          expect(isPair(6)).to.be(true);
         });
      });  

      describe('Check impair number', function() {
        it('should expose true', function() {
          expect(isPair(5)).to.be(false);
         });
      }); 
      
      describe('Check null argument', function() {
        it('should expose Error Exception', function() {
          expect(isPair).withArgs().to.throwError();
         });
      }); 
      
  });