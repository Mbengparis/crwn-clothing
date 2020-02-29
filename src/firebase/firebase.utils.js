import firebase from 'firebase/app';
import 'firebase/firestore';
import 'firebase/auth';

const config={
    apiKey: "AIzaSyDdHrjV0XTMVcQ7JhCDwh3IljXmHD0MksQ",
    authDomain: "crwn-db-910ac.firebaseapp.com",
    databaseURL: "https://crwn-db-910ac.firebaseio.com",
    projectId: "crwn-db-910ac",
    storageBucket: "crwn-db-910ac.appspot.com",
    messagingSenderId: "686318767024",
    appId: "1:686318767024:web:f20229d1edea866bfe2475",
    measurementId: "G-9EKSRLWRX5"
};


firebase.initializeApp(config);

export const auth = firebase.auth();
export const firestore = firebase.firestore();

const provider = new firebase.auth.GoogleAuthProvider();
provider.setCustomParameters({prompt: 'select_account'});
export const signInWithGoogle = () => auth.signInWithPopup(provider);


export default firebase;