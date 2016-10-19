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
