// form validation 

function validateForm() {
  let isValid = true;

// Validate Voornaam
let voornaam = document.getElementById('voornaam');
let voornaamError = document.getElementById('voornaamError');

if (voornaam.value.trim() === '') {
  voornaamError.innerText = 'Voornaam is verplicht';
  isValid = false;
  voornaam.setAttribute('data-isvalid', isValid.toString());
} else {
  // Voornaam regex-patroon (accepteert letters en eventueel spaties, streepjes en apostrofs)
  const voornaamPattern = /^[a-zA-Z\s'-]*$/;

  if (!voornaamPattern.test(voornaam.value)) {
    voornaamError.innerText = 'Ongeldige voornaam';
    isValid = false;
    voornaam.setAttribute('data-isvalid', isValid.toString());
  } else {
    voornaamError.innerText = '';

  }
}

// Validate Achternaam
let achternaam = document.getElementById('achternaam');
let achternaamError = document.getElementById('achternaamError');

if (achternaam.value.trim() === '') {
  achternaamError.innerText = 'Achternaam is verplicht';
  isValid = false;
  achternaam.setAttribute('data-isvalid', isValid.toString());
} else {
  // Achternaam regex-patroon (accepteert letters en eventueel spaties, streepjes en apostrofs)
  const achternaamPattern = /^[a-zA-Z\s'-]*$/;

  if (!achternaamPattern.test(achternaam.value)) {
    achternaamError.innerText = 'Ongeldige achternaam';
    isValid = false;
    achternaam.setAttribute('data-isvalid', isValid.toString());
  } else {
    achternaamError.innerText = '';
  }
}

// Validate Plaats
let plaats = document.getElementById('plaats');
let plaatsError = document.getElementById('plaatsError');

if (plaats.value.trim() === '') {
  plaatsError.innerText = 'Plaats is verplicht';
  isValid = false;
  plaats.setAttribute('data-isvalid', isValid.toString());
} else {
  // Plaats regex-patroon (accepteert letters, spaties en eventuele andere speciale tekens)
  const plaatsPattern = /^[a-zA-Z\s\.,-]*$/;

  if (!plaatsPattern.test(plaats.value)) {
    plaatsError.innerText = 'Ongeldige plaats';
    isValid = false;
    plaats.setAttribute('data-isvalid', isValid.toString());
  } else {
    plaatsError.innerText = '';
  }
}



// Validate Postcode
let postcode = document.getElementById('postcode');
let postcodeError = document.getElementById('postcodeError');

if (postcode.value.trim() === '') {
  postcodeError.innerText = 'Postcode is verplicht';
  isValid = false;
  postcode.setAttribute('data-isvalid', isValid.toString());
} else {
  // Postcode regex-patroon
  const postcodePattern = /^[1-9][0-9]{3} [a-zA-Z]{2}$/;

  if (!postcodePattern.test(postcode.value)) {
    postcodeError.innerText = 'Ongeldige postcode';
    isValid = false;
    postcode.setAttribute('data-isvalid', isValid.toString());
  } else {
    postcodeError.innerText = '';
  }
}


  // Validate Straatnaam
let straatnaam = document.getElementById('straatnaam');
let straatnaamError = document.getElementById('straatnaamError');

if (straatnaam.value.trim() === '') {
  straatnaamError.innerText = 'Straatnaam is verplicht';
  isValid = false;
  straatnaam.setAttribute('data-isvalid', isValid.toString());
} else {
  // Straatnaam regex-patroon (accepteert letters, spaties en eventuele andere speciale tekens)
  const straatnaamPattern = /^[a-zA-Z\s\d\.,-]*$/;

  if (!straatnaamPattern.test(straatnaam.value)) {
    straatnaamError.innerText = 'Ongeldige straatnaam';
    isValid = false;
    straatnaam.setAttribute('data-isvalid', isValid.toString());
  } else {
    straatnaamError.innerText = '';
  }
}


// Validate Huisnummer
let huisnummer = document.getElementById('huisnummer');
let huisnummerError = document.getElementById('huisnummerError');

if (huisnummer.value.trim() === '') {
  huisnummerError.innerText = 'Huisnummer is verplicht';
  isValid = false;
  huisnummer.setAttribute('data-isvalid', isValid.toString());
} else {
  // Huisnummer regex-patroon (voor Nederlandse huisnummers)
  const huisnummerPattern = /^([1-9]\d{0,3}[a-zA-Z]?)$/;

  if (!huisnummerPattern.test(huisnummer.value)) {
    huisnummerError.innerText = 'Ongeldig huisnummer';
    isValid = false;
    huisnummer.setAttribute('data-isvalid', isValid.toString());
  } else {
    huisnummerError.innerText = '';
  }
}


// Validate Telefoonnummer
let telefoonnummer = document.getElementById('telefoonnummer');
let telefoonnummerError = document.getElementById('telefoonnummerError');

if (telefoonnummer.value.trim() === '') {
  telefoonnummerError.innerText = 'Telefoonnummer is verplicht';
  isValid = false;
  telefoonnummer.setAttribute('data-isvalid', isValid.toString());
} else {
  // Telefoonnummer mag alleen cijfers bevatten en mag niet langer zijn dan 15 cijfers
  const telefoonnummerPattern = /^[0-9]+$/;

  if (!telefoonnummerPattern.test(telefoonnummer.value) || telefoonnummer.value.length > 15) {
    telefoonnummerError.innerText = 'Ongeldig telefoonnummer';
    isValid = false;
    telefoonnummer.setAttribute('data-isvalid', isValid.toString());
  } else {
    telefoonnummerError.innerText = '';
  }
}



  // Validate Email
let email = document.getElementById('email');
let emailError = document.getElementById('emailError');

if (email.value.trim() === '') {
  emailError.innerText = 'Email is verplicht';
  isValid = false;
  email.setAttribute('data-isvalid', isValid.toString());
} else {
  // E-mailadres regex-patroon
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (!emailPattern.test(email.value)) {
    emailError.innerText = 'Ongeldig e-mailadres';
    isValid = false;
    email.setAttribute('data-isvalid', isValid.toString());
  } else {
    emailError.innerText = '';
  }
}


  return isValid;
}

