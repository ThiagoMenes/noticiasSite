     firebase.initializeApp({
        apiKey: "AIzaSyD4tbv2QzzuFoyjrc82teN0yjTVkrQHF2A",
        authDomain: "noticiasportal-6e899.firebaseapp.com",
        projectId: "noticiasportal-6e899",
        storageBucket: "noticiasportal-6e899.appspot.com",
        messagingSenderId: "632093028103",
        appId: "1:632093028103:web:18221fe97a7d08f0b3dfa2",
        measurementId: "G-L700TS1ZLW"
      });
      
      firebase.firestore();
      const db = firebase.firestore();
      
      // Disabledeprecatedfeatures
      db.settings({timestampsInSnapshots: true});
      const noticiasList = document.querySelector('[data-js="noticias-list"]')
      const addNoticias = document.querySelector('[data-js="add-Noticias-form"]')

      function cria_noticia(){
          
          
          addNoticias.addEventListener('submit', e => {
            e.preventDefault()
            db.collection('Noticias').add({
              titulo:e.target.titulo.value,
              texto: e.target.texto.value,
              fonte: e.target.fonte.value
            })
  
            .then(() => { 
                console.log('Noticia Adicionada')
            })
            .catch(e =>{
                console.log('Noticia Nao adicionada', e.message)
            })
  
            })
        }
          function listaNoticias(){
              return 0;
          };  
      

      
          db.colletion('Noticias').get()
          .then(snapshot => {
             const noticiasLis = snapshot.docs.reduce((acc,doc)=>{
                 const { titulo, texto, fonte } = doc.data()
                  acc += `<li class="my-4">
                  <h5>${titulo}</h5>
                  <ul>
                    <li>${texto}</li>
                    <li>${fonte}</li>
                  </ul>
                </li>`
                  
                  return acc
              },'')
             noticiasList.innerHTML +=noticiasLis;
              
          })
          .catch(err => {
              console.log(err.message)
          })
        
      



