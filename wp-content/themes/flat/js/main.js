// main.js
var ursa = new ZeroClipboard( document.getElementById("ursa") );

ursa.on( "ready", function( readyEvent ) {
  // alert( "ZeroClipboard SWF is ready!" );

  ursa.on( "aftercopy", function( event ) {
    // `this` === `client`
    // `event.target` === the element that was clicked
    alert("Express transaction was copied to your clipboard!");
  } );
} );

var express = new ZeroClipboard( document.getElementById("express") );

express.on( "ready", function( readyEvent ) {
  // alert( "ZeroClipboard SWF is ready!" );

  express.on( "aftercopy", function( event ) {
    // `this` === `client`
    // `event.target` === the element that was clicked
    alert("Express transaction was copied to your clipboard!");
  } );
} );

var domestic = new ZeroClipboard( document.getElementById("domestic") );

domestic.on( "ready", function( readyEvent ) {
  // alert( "ZeroClipboard SWF is ready!" );

  domestic.on( "aftercopy", function( event ) {
    // `this` === `client`
    // `event.target` === the element that was clicked
    alert("Ground transaction was copied to your clipboard!");
  } );
} );

var dangerousGoods = new ZeroClipboard( document.getElementById("dangerous-goods") );

dangerousGoods.on( "ready", function( readyEvent ) {
  // alert( "ZeroClipboard SWF is ready!" );

  dangerousGoods.on( "aftercopy", function( event ) {
    // `this` === `client`
    // `event.target` === the element that was clicked
    alert("Dangerous Goods transaction was copied to your clipboard!");
  } );
} );

var returns = new ZeroClipboard( document.getElementById("returns") );

returns.on( "ready", function( readyEvent ) {
  // alert( "ZeroClipboard SWF is ready!" );

  returns.on( "aftercopy", function( event ) {
    // `this` === `client`
    // `event.target` === the element that was clicked
    alert("Return transaction was copied to your clipboard!");
  } );
} );

// var email = new ZeroClipboard( document.getElementById("email") );

// email.on( "ready", function( readyEvent ) {
//   // alert( "ZeroClipboard SWF is ready!" );

//   email.on( "aftercopy", function( event ) {
//     // `this` === `client`
//     // `event.target` === the element that was clicked
//     alert("Email transaction was copied to your clipboard!");
//   } );
// } );

var etd = new ZeroClipboard( document.getElementById("etd") );

etd.on( "ready", function( readyEvent ) {
  // alert( "ZeroClipboard SWF is ready!" );

  etd.on( "aftercopy", function( event ) {
    // `this` === `client`
    // `event.target` === the element that was clicked
    alert("ETD transaction was copied to your clipboard!");
  } );
} );

// Certification Template

var cert = new ZeroClipboard( document.getElementById("cert") );

cert.on( "ready", function( readyEvent ) {
  // alert( "ZeroClipboard SWF is ready!" );

  cert.on( "aftercopy", function( event ) {
    // `this` === `client`
    // `event.target` === the element that was clicked
    alert("Certification template was copied to your clipboard!");
  } );
} );

// FXCT Template

var sha2call = new ZeroClipboard( document.getElementById("sha2call") );

sha2call.on( "ready", function( readyEvent ) {
  // alert( "ZeroClipboard SWF is ready!" );

  sha2call.on( "aftercopy", function( event ) {
    // `this` === `client`
    // `event.target` === the element that was clicked
    alert("Template was copied to your clipboard!");
  } );
} );