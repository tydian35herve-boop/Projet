document.getElementById('form').addEventListener('submit', function(e) {
    e.preventDefault();
    const msg = document.getElementById('msg');
    const nom = document.getElementById('nom').value;
    const prenom = document.getElementById('prenom').value;
    const email = document.getElementById('email').value;
    
    
    const emailValide = email.includes('@') && email.includes('.');
    const formulaireValide = nom && prenom && emailValide;
    
    if(formulaireValide) {
        
        msg.textContent = 'Votre demande est bien envoyée !';
        msg.style.background = '#d4edda';
        msg.style.color = '#155724';
    } else {
      
        msg.textContent = 'Vos informations ne sont pas correctes';
        msg.style.background = '#f8d7da';
        msg.style.color = '#721c24';
    }
    msg.style.display = 'block';
});