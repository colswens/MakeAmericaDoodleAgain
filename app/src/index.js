import React from 'react';
import ReactDOM from 'react-dom';
import App from './App';
import './index.css';
import * as firebase from 'firebase';

var config = {
    apiKey: "AIzaSyBU2gpSPOXQud13jn_XfG499tmnuARIJdI",
    authDomain: "makeamericadoodleagain.firebaseapp.com",
    databaseURL: "https://makeamericadoodleagain.firebaseio.com",
    storageBucket: "",
    messagingSenderId: "26288147536"
};

firebase.initializeApp(config);

ReactDOM.render(
  <App />,
  document.getElementById('root')

);

var provider = new firebase.auth.FacebookAuthProvider();

firebase.auth().signInWithRedirect(provider);

firebase.auth().getRedirectResult().then(function(result) {
  if (result.credential) {
    // This gives you a Facebook Access Token. You can use it to access the Facebook API.
    var token = result.credential.accessToken;
    // ...
  }
  // The signed-in user info.
  var user = result.user;
}).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  // The email of the user's account used.
  var email = error.email;
  // The firebase.auth.AuthCredential type that was used.
  var credential = error.credential;
  // ...
});