const form = document.getElementById("bookingForm");

const fullName = document.getElementById("fullName");
const email = document.getElementById("email");
const phone = document.getElementById("phone");
const tour = document.getElementById("tour");
const startDate = document.getElementById("startDate");
const people = document.getElementById("people");
const kvkk = document.getElementById("kvkk");

const errName = document.getElementById("errName");
const errEmail = document.getElementById("errEmail");
const errPhone = document.getElementById("errPhone");
const errTour = document.getElementById("errTour");
const errDate = document.getElementById("errDate");
const errPeople = document.getElementById("errPeople");
const errKvkk = document.getElementById("errKvkk");
const successMsg = document.getElementById("successMsg");

function clearErrors(){
  errName.textContent = "";
  errEmail.textContent = "";
  errPhone.textContent = "";
  errTour.textContent = "";
  errDate.textContent = "";
  errPeople.textContent = "";
  errKvkk.textContent = "";
  successMsg.textContent = "";
}

function isEmailValid(value){
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value.trim());
}

function onlyDigits(value){
  return value.replace(/\D/g, "");
}

form.addEventListener("submit", (e) => {
  e.preventDefault();
  clearErrors();

  let ok = true;

  if(fullName.value.trim().length < 3){
    errName.textContent = "Ad soyad en az 3 karakter olmalı.";
    ok = false;
  }

  if(!isEmailValid(email.value)){
    errEmail.textContent = "Geçerli bir e-posta gir.";
    ok = false;
  }

  const digits = onlyDigits(phone.value);
  if(digits.length < 10){
    errPhone.textContent = "Telefon en az 10 haneli olmalı (sadece rakam).";
    ok = false;
  }

  if(tour.value === ""){
    errTour.textContent = "Lütfen bir tur seç.";
    ok = false;
  }

  if(startDate.value === ""){
    errDate.textContent = "Lütfen tarih seç.";
    ok = false;
  } else {
    const chosen = new Date(startDate.value);
    const today = new Date();
    today.setHours(0,0,0,0);
    if(chosen < today){
      errDate.textContent = "Geçmiş bir tarih seçemezsin.";
      ok = false;
    }
  }

  const p = Number(people.value);
  if(Number.isNaN(p) || p < 1 || p > 10){
    errPeople.textContent = "Kişi sayısı 1-10 arası olmalı.";
    ok = false;
  }

  if(!kvkk.checked){
    errKvkk.textContent = "Devam etmek için KVKK onayı gerekli.";
    ok = false;
  }

  if(ok){
    successMsg.textContent = "✅ Rezervasyon bilgileri doğrulandı! (Demo) Form başarıyla gönderildi.";
    form.reset();
  }
});
