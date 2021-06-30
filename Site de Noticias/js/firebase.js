(function (){

    var firebaseConfig = {
        apiKey: "AIzaSyD4tbv2QzzuFoyjrc82teN0yjTVkrQHF2A",
        authDomain: "noticiasportal-6e899.firebaseapp.com",
        projectId: "noticiasportal-6e899",
        storageBucket: "noticiasportal-6e899.appspot.com",
        messagingSenderId: "632093028103",
        appId: "1:632093028103:web:18221fe97a7d08f0b3dfa2",
        measurementId: "G-L700TS1ZLW"
      };
      firebase.initializeApp(firebaseConfig);
      firebase.analytics();
      var db= firebase.firestore();
      // Disabledeprecatedfeatures
      db.settings({timestampsInSnapshots: true});

      function cria_noticia(){
          e.preventDefault();
          let noticiaTitulo = document.getElementById("Titulo").value;
          let noticiaTexto = document.getElementById("Texto").value;
          let noticiaFonte = document.getElementById("Fonte").value;
          
          db.collection("Noticias").add({
              Titulo: noticiaTitulo,
              Texto: noticiaTexto,
              Fonte: noticiaFonte
          })
          listaNoticias();  
      }

      function LeNoticias() {
        
      }

})()