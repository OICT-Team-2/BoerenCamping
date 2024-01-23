function updateBorderColor(inputElement, valid = false) {
  if (valid) {
    inputElement.style.border = '1px solid #ccc';
  }
  else {
    inputElement.style.border = '1px solid red';
  }
}

// form validation 

function validateForm() {
  let isValid = true;

// Validate Voornaam
let voornaam = document.getElementById('voornaam');
let voornaamError = document.getElementById('voornaamError');

if (voornaam.value.trim() === '') {
  voornaamError.innerText = 'Voornaam is verplicht';
  isValid = false;
 
  updateBorderColor(voornaam);
} else {
  // Voornaam regex-patroon (accepteert letters en eventueel spaties, streepjes en apostrofs)
  const voornaamPattern = /^[a-zA-Z\s'-]*$/;

  if (!voornaamPattern.test(voornaam.value)) {
    voornaamError.innerText = 'Ongeldige voornaam';
    isValid = false;
  
    updateBorderColor(voornaam);
  } else {
    voornaamError.innerText = '';
    updateBorderColor(voornaam,true);

  }
}

// Validate Achternaam
let achternaam = document.getElementById('achternaam');
let achternaamError = document.getElementById('achternaamError');

if (achternaam.value.trim() === '') {
  achternaamError.innerText = 'Achternaam is verplicht';
  isValid = false;
  updateBorderColor(achternaam);
} else {
  // Achternaam regex-patroon (accepteert letters en eventueel spaties, streepjes en apostrofs)
  const achternaamPattern = /^[a-zA-Z\s'-]*$/;

  if (!achternaamPattern.test(achternaam.value)) {
    achternaamError.innerText = 'Ongeldige achternaam';
    isValid = false;
    updateBorderColor(achternaam);
  } else {
    achternaamError.innerText = '';
    updateBorderColor(achternaam,true);
  }
}

// Validate Plaats
let plaats = document.getElementById('plaats');
let plaatsError = document.getElementById('plaatsError');

if (plaats.value.trim() === '') {
  plaatsError.innerText = 'Plaats is verplicht';
  isValid = false;
  updateBorderColor(plaats);
} else {
  // Plaats regex-patroon (accepteert letters, spaties en eventuele andere speciale tekens)
  const plaatsPattern = /^[a-zA-Z\s\.,-]*$/;

  if (!plaatsPattern.test(plaats.value)) {
    plaatsError.innerText = 'Ongeldige plaats';
    isValid = false;
    updateBorderColor(plaats);
  } else {
    plaatsError.innerText = '';
    updateBorderColor(plaats,true);
  }
}



// Validate Postcode
let postcode = document.getElementById('postcode');
let postcodeError = document.getElementById('postcodeError');

if (postcode.value.trim() === '') {
  postcodeError.innerText = 'Postcode is verplicht';
  isValid = false;
 updateBorderColor(postcode);
} else {
  // Postcode regex-patroon
  const postcodePattern = /^[1-9][0-9]{3}( ?[a-zA-Z]{2})?$/;

  if (!postcodePattern.test(postcode.value)) {
    postcodeError.innerText = 'Ongeldige postcode';
    isValid = false;
    updateBorderColor(postcode);
  } else {
    postcodeError.innerText = '';
    updateBorderColor(postcode,true);
  }
}


  // Validate Straatnaam
let straatnaam = document.getElementById('straatnaam');
let straatnaamError = document.getElementById('straatnaamError');

if (straatnaam.value.trim() === '') {
  straatnaamError.innerText = 'Straatnaam is verplicht';
  isValid = false;
  updateBorderColor(straatnaam);
} else {
  // Straatnaam regex-patroon (accepteert letters, spaties en eventuele andere speciale tekens)
  const straatnaamPattern = /^[a-zA-Z\s\d\.,-]*$/;

  if (!straatnaamPattern.test(straatnaam.value)) {
    straatnaamError.innerText = 'Ongeldige straatnaam';
    isValid = false;
    updateBorderColor(straatnaam);
  } else {
    straatnaamError.innerText = '';
    updateBorderColor(straatnaam,true);
  }
}


// Validate Huisnummer
let huisnummer = document.getElementById('huisnummer');
let huisnummerError = document.getElementById('huisnummerError');

if (huisnummer.value.trim() === '') {
  huisnummerError.innerText = 'Huisnummer is verplicht';
  isValid = false;
  updateBorderColor(huisnummer);
} else {
  // Huisnummer regex-patroon (voor Nederlandse huisnummers)
  const huisnummerPattern = /^([1-9]\d{0,3}[a-zA-Z]?)$/;

  if (!huisnummerPattern.test(huisnummer.value)) {
    huisnummerError.innerText = 'Ongeldig huisnummer';
    isValid = false;
    updateBorderColor(huisnummer);
  } else {
    huisnummerError.innerText = '';
    updateBorderColor(huisnummer,true);
  }
}


// Validate Telefoonnummer
let telefoonnummer = document.getElementById('telefoonnummer');
let telefoonnummerError = document.getElementById('telefoonnummerError');

if (telefoonnummer.value.trim() === '') {
  telefoonnummerError.innerText = 'Telefoonnummer is verplicht';
  isValid = false;
  updateBorderColor(telefoonnummer);
} else {
  // Telefoonnummer mag alleen cijfers bevatten en mag niet langer zijn dan 15 cijfers
  const telefoonnummerPattern = /^[0-9]+$/;

  if (!telefoonnummerPattern.test(telefoonnummer.value) || telefoonnummer.value.length > 15) {
    telefoonnummerError.innerText = 'Ongeldig telefoonnummer';
    isValid = false;
    updateBorderColor(telefoonnummer);
  } else {
    telefoonnummerError.innerText = '';
    updateBorderColor(telefoonnummer,true);
  }
}



  // Validate Email
let email = document.getElementById('email');
let emailError = document.getElementById('emailError');

if (email.value.trim() === '') {
  emailError.innerText = 'Email is verplicht';
  isValid = false;
  updateBorderColor(email);
} else {
  // E-mailadres regex-patroon
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (!emailPattern.test(email.value)) {
    emailError.innerText = 'Ongeldig e-mailadres';
    isValid = false;
    updateBorderColor(email);
  } else {
    emailError.innerText = '';
    updateBorderColor(email,true);
  }
}


  return isValid;
}

// reserveringssysteem frontpagina

// Eventlistener toevoegen aan het formulier
document.querySelector('.form').addEventListener('submit', function (event) {
  // Huidige datum en tijd verkrijgen
  const currentDate = new Date();
  
  // Aankomstdatum en vertrekdatum uit de formulier-elementen halen
  const aankomstDatum = new Date(document.getElementById('aankomst').value);
  const vertrekDatum = new Date(document.getElementById('vertrek').value);

  // Vergelijk de aankomstdatum met de huidige datum
  if (aankomstDatum < currentDate) {
    alert('U kunt niet in het verleden reserveren. Selecteer een geldige aankomstdatum.');
    event.preventDefault(); // Voorkom het indienen van het formulier
  }

  // Vergelijk de vertrekdatum met de aankomstdatum
  if (vertrekDatum <= aankomstDatum) {
    alert('Vertrekdatum moet na aankomstdatum liggen. Selecteer een geldige vertrekdatum.');
    event.preventDefault(); // Voorkom het indienen van het formulier
  }
});

// niet langer dan een maand reserveren 
// Eventlistener toevoegen aan het formulier
document.querySelector('.form').addEventListener('submit', function (event) {
  // Huidige datum en tijd verkrijgen
  const currentDate = new Date();
  
  // Aankomstdatum en vertrekdatum uit de formulier-elementen halen
  const aankomstDatum = new Date(document.getElementById('aankomst').value);
  const vertrekDatum = new Date(document.getElementById('vertrek').value);

  // Voeg een maand toe aan de aankomstdatum
  const maxVertrekDatum = new Date(aankomstDatum);
  maxVertrekDatum.setMonth(maxVertrekDatum.getMonth() + 1);

  // Beperk de vertrekdatum op het huidige jaar
  if (vertrekDatum.getFullYear() > currentDate.getFullYear()) {
    alert('U kunt niet in het volgende jaar reserveren. Selecteer een geldige vertrekdatum.');
    event.preventDefault(); // Voorkom het indienen van het formulier
  } else if (vertrekDatum > maxVertrekDatum) {
    alert('U kunt maximaal voor één maand reserveren. Selecteer een geldige vertrekdatum.');
    event.preventDefault(); // Voorkom het indienen van het formulier
  }
});





