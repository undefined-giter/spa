// LETTER
let btnYear = document.querySelector('#btnYear');
const answerLetter = document.querySelector('#answerLetter');
btnYear.addEventListener('click', findLetterByYear);
let whichOne

function findLetterByYear(){
    whichOne = true
    answerLetter.style.color = 'blue'
    answerLetter.style.fontWeight = 800

    let year
    year = parseInt(document.querySelector('#year').value);

    findLetter(year)
}

function findLetter(year){
    let text = ` est la première lettre correspondant à l'année ${year}.`
    switch(year){
        case 1926:
        case 1951:
        case 1985:
        case 2005:
        case 2025:
            if(whichOne === true){
                answerLetter.textContent = 'A' + text
            } else{
                return 'A'
            }
            break;
        case 1927:
        case 1952:
        case 1986:
        case 2006:
        case 2026:
            if(whichOne === true){
                answerLetter.textContent = 'B' + text
            } else{
                return 'B'
            }
            break;
        case 1928:
        case 1953:
        case 1987:
        case 2007:
        case 2027:
            if(whichOne === true){
                answerLetter.textContent = 'C' + text
            } else{
                return 'C'
            }
            break;
        case 1929:
        case 1954:
        case 1988:
        case 2008:
        case 2028:
            if(whichOne === true){
                answerLetter.textContent = 'D' + text
            } else{
                return 'D'
            }
            break;
        case 1930:
        case 1955:
        case 1989:
        case 2009:
        case 2029:
            if(whichOne === true){
                answerLetter.textContent = 'E' + text
            } else{
                return 'E'
            }
            break;
        case 1931:
        case 1956:
        case 1990:
        case 2010:
        case 2030:
            if(whichOne === true){
                answerLetter.textContent = 'F' + text
            } else{
                return 'F'
            }
            break;
        case 1932:
        case 1957:
        case 1991:
        case 2011:
        case 2031:
            if(whichOne === true){
                answerLetter.textContent = 'G' + text
            } else{
                return 'G'
            }
            break;
        case 1933:
        case 1958:
        case 1992:
        case 2012:
        case 2032:
            if(whichOne === true){
                answerLetter.textContent = 'H' + text
            } else{
                return 'H'
            }
            break;
        case 1934:
        case 1959:
        case 1973:
        case 1993:
        case 2013:
        case 2033:
            if(whichOne === true){
                answerLetter.textContent = 'I' + text
            } else{
                return 'I'
            }
            break;
        case 1935:
        case 1960:
        case 1974:
        case 1994:
        case 2014:
        case 2034:
            if(whichOne === true){
                answerLetter.innerHTML = 'J, (K sera une alternative possible à partir de 2034)'
            } else if(randYr === 2034){
                return 'J K'
            }else{
                return 'J'
            }
            break;
        case 1936:
        case 1961:
            if(whichOne === true){
                answerLetter.textContent = 'K' + text
            } else{
                return 'K'
            }
            break;
        case 1937:
        case 1962:
        case 1975:
        case 1995:
        case 2015:
            if(whichOne === true){
                answerLetter.textContent = 'L' + text
            } else{
                return 'L'
            }
            break;
        case 1938:
        case 1963:
        case 1976:
        case 1996:
        case 2016:
            if(whichOne === true){
                answerLetter.textContent = 'M' + text
            } else{
                return 'M'
            }
            break;
        case 1939:
        case 1964:
        case 1977:
        case 1997:
        case 2017:
            if(whichOne === true){
                answerLetter.textContent = 'N' + text
            } else{
                return 'N'
            }
            break;
        case 1940:
        case 1965:
        case 1978:
        case 1998:
        case 2018:
            if(whichOne === true){
                answerLetter.textContent = 'O' + text
            } else{
                return 'O'
            }
            break;
        case 1941:
        case 1966:
        case 1979:
        case 1999:
        case 2019:
            if(whichOne === true){
                answerLetter.textContent = 'P (Q est également une alternative officielle depuis 2019)'
            } else if(randYr === 2019){
                return 'P Q'
            } else{
                return 'P'
            }
            break;
        case 1942:
        case 1967:
            if(whichOne === true){
                answerLetter.textContent = 'Q' + text
            } else{
                return 'Q'
            }
            break;
        case 1943:
        case 1968:
        case 1980:
        case 2000:
        case 2020:
            if(whichOne === true){
                answerLetter.textContent = 'R' + text
            } else{
                return 'R'
            }
            break;
        case 1944:
        case 1969:
        case 1981:
        case 2001:
        case 2021:
            if(whichOne === true){
                answerLetter.textContent = 'S' + text
            } else{
                return 'S'
            }
            break;
        case 1945:
        case 1970:
        case 1982:
        case 2002:
        case 2022:
            if(whichOne === true){
                answerLetter.textContent = 'T' + text
            } else{
                return 'T'
            }
            break;
        case 1946:
        case 1971:
        case 1983:
        case 2003:
        case 2023:
            if(whichOne === true){
                answerLetter.textContent = 'U' + text
            } else{
                return 'U'
            }
            break;
        case 1947:
        case 1972:
        case 1984:
        case 2004:
        case 2024:
            if(whichOne === true){
                answerLetter.textContent = 'V (alternatives officielles à partir de 2024 : W, X, Y et Z )'
            } else if(randYr === 2024){
                return 'V W X Y Z'
            } else{
                return 'V'
            }
            break;
        case 1948:
            if(whichOne === true){
                answerLetter.textContent = 'W' + text
            } else{
                return 'W'
            }
            break;
        case 1949:
            if(whichOne === true){
                answerLetter.textContent = 'X' + text
            } else{
                return 'X'
            }
            break;
        case 1950:
            if(whichOne === true){
                answerLetter.textContent = `Y ou Z sont les lettres correspondantes à ${year}.`
            } else{
                return 'Y Z'
            }
            break;
        default:
            if(whichOne === true){
                answerLetter.style.color = 'red'
                answerLetter.style.fontWeight = 700
                answerLetter.textContent = `Lettre inconnue pour cette année ou erreur de saisie. (${year})`
            } else{
                return ''
            }

    }
}





// YEAR
let btnLetter = document.querySelector('#btnLetter');
const answerYear = document.querySelector('#answerYear');
btnLetter.addEventListener('click', findYearByLetter);

function findYearByLetter(){
    answerYear.style.color = 'blue'
    answerYear.style.fontWeight = 800

    let letter = document.querySelector('#letter').value;
    letter = letter.toUpperCase()
    let text = ` sont les années correspondantes à la lettre ${letter}.`

    switch(letter){
        case 'A':
            answerYear.textContent = '1926, 1951, 1985, 2005 et 2025' + text
            break;
        case 'B':
            answerYear.textContent = '1927, 1952, 1986, 2006 et 2026' + text
            break;
        case 'C':
            answerYear.textContent = '1928, 1953, 1987, 2007 et 2027' + text
            break;
        case 'D':
            answerYear.textContent = '1929, 1954, 1988, 2008 et 2028' + text
            break;
        case 'E':
            answerYear.textContent = '1930, 1955, 1989, 2009 et 2029' + text
            break;
        case 'F':
            answerYear.textContent = '1931, 1956, 1990, 2010 et 2030' + text
            break;
        case 'G':
            answerYear.textContent = '1932, 1957, 1991, 2011 et 2031' + text
            break;
        case 'H':
            answerYear.textContent = '1933, 1958, 1992, 2012 et 2032' + text
            break;
        case 'I':
            answerYear.textContent = '1934, 1959, 1973, 1993, 2013 et 2033' + text
            break;
        case 'J':
            answerYear.innerHTML = '1935, 1960, 1974, 1994, 2014, et 2034, sont les années correspondantes à la lettre J. K sera une alternative possible à partir de 2034'
            break;
        case 'K':
            answerYear.textContent = '1936 et 1961' + text + ' Notez que J sera une alternative possible à partir de 2034.'
            break;
        case 'L':
            answerYear.textContent = '1937, 1962, 1975, 1995 et 2015' + text
            break;
        case 'M':
            answerYear.textContent = '1938, 1963, 1976, 1996 et 2016' + text
            break;
        case 'N':
            answerYear.textContent = '1939, 1964, 1977, 1997 et 2017' + text
            break;
        case 'O':
            answerYear.textContent = '1940, 1965, 1978, 1998 et 2018' + text
            break;
        case 'P':
            answerYear.textContent = '1941, 1966, 1979, 1999 et 2019' + text + ' Notez que Q est également une alternative officielle depuis 2019.'
            break;
        case 'Q':
            answerYear.textContent = '1942 et 1967' + text + ' Notez que P est également une alternative officielle depuis 2019.'
            break;
        case 'R':
            answerYear.textContent = '1943, 1968, 1980, 2000 et 2020' + text
            break;
        case 'S':
            answerYear.textContent = '1944, 1969, 1981, 2001, 2021' + text
            break;
        case 'T':
            answerYear.textContent = '1945, 1970, 1982, 2002, 2022' + text
            break;
        case 'U':
            answerYear.textContent = '1946, 1971, 1983, 2003 et 2023' + text
            break;
        case 'V':
            answerYear.textContent = `1947, 1972, 1984, 2004 et 2024 ${text} Notez les alternatives officielles à ${letter} partir de 2024 : W, X, Y et Z.`
            break;
        case 'W':
            answerYear.textContent = '1948 est l\'unique année pour la lettre W. Notez ses alternatives officielles à partir de 2024 : V, X, Y et Z.'
            break;
        case 'X':
            answerYear.textContent = '1949 est l\'unique année pour la lettre X. Notez ses alternatives officielles à partir de 2024 : V, W, Y et Z.'
            break;
        case 'Y':
        case 'Z':
            answerYear.textContent = '1950 est l\'unique année pour les lettres Y et Z. Notez leurs alternatives officielles à partir de 2024 : V, W et X.'
            break;
        default:
            answerYear.style.color = 'red'
            answerYear.style.fontWeight = 700
            answerYear.textContent = 'Veuillez taper la première lettre de son nom, sans accent.'
    }
}



// DOG
let btnDog = document.querySelector('#btnDog');
const answerDog = document.querySelector('#answerDog');
btnDog.addEventListener('click', dogAge);

function dogAge(){
    answerDog.style.color = 'blue'
    answerDog.style.fontWeight = 800

    let ageDog = parseFloat(document.querySelector('#ageDog').value);
    switch(ageDog){
        case 0.5:
            answerDog.textContent = '10 ans'
            break;
        case 1:
            answerDog.textContent = '18 ans'
            break;
        case 2:
            answerDog.textContent = '27 ans'
            break;
        case 3:
            answerDog.textContent = '33 ans'
            break;
        case 4:
            answerDog.textContent = '39 ans'
            break;
        case 5:
            answerDog.textContent = '45 ans'
            break;
        case 6:
            answerDog.textContent = '51 ans'
            break;
        case 7:
            answerDog.textContent = '57 ans'
            break;
        case 8:
            answerDog.textContent = '63 ans'
            break;
        case 9:
            answerDog.textContent = '69 ans'
            break;
        case 10:
            answerDog.textContent = '75 ans'
            break;
        case 11:
            answerDog.textContent = '80 ans'
            break;
        case 12:
            answerDog.textContent = '85 ans'
            break;
        case 13:
            answerDog.textContent = '90 ans'
            break;
        case 14:
            answerDog.textContent = '96 ans'
            break;
        case 15:
            answerDog.textContent = '102 ans'
            break;
        case 16:
            answerDog.textContent = '110 ans'
            break;
        case 17:
        case 18:
        case 19:
            answerDog.textContent = '♥'
            break;
        default:
            answerDog.style.color = 'red'
            answerDog.style.fontWeight = 700
            answerDog.textContent = 'Âge non pris en compte'
    }
}



// CAT
let btnCat = document.querySelector('#btnCat');
const answerCat = document.querySelector('#answerCat');
btnCat.addEventListener('click', catAge);

function catAge(){
    answerCat.style.color = 'blue'
    answerCat.style.fontWeight = 800

    let ageCat = parseFloat(document.querySelector('#ageCat').value);

    if (ageCat < 0.5 || ageCat === 0.5 || ageCat === 1 || ageCat === 1.5 || ageCat === 2 || ageCat > 40){
        if(ageCat < 0.5){
            answerCat.style.color = 'red'
            answerCat.style.fontWeight = 700
            answerCat.textContent = 'Âge non pris en compte'
        } else if(ageCat === 0.5){
            answerCat.textContent = '10 ans'
        } else if(ageCat === 1){
            answerCat.textContent = '15 ans'
        }else if(ageCat === 1.5){
            answerCat.textContent = '21 ans'
        }else if(ageCat === 2){
            answerCat.textContent = '24 ans'
        }else{
            answerCat.style.color = 'yellow'
            answerCat.style.fontWeight = 700
            answerCat.textContent = 'Valeur en années terrestre requise'
        }
    } else if(Number.isInteger(ageCat)){
        let catsAge = 24 + (ageCat - 2) * 4
        answerCat.textContent = `${catsAge} ans`
    }else{
        answerCat.style.color = 'red'
        answerCat.style.fontWeight = 700
        answerCat.textContent = 'Âge non pris en compte'
    }
}



// DEGUS
const answerDegus = document.querySelector('#answerDegus');

let degusAge = () => {
    let ageDegus = parseInt(document.querySelector('#ageDegus').value)
    if (isNaN(ageDegus) || ageDegus > 18){
        answerDegus.style.color = 'red'
        answerDegus.style.fontWeight = 700
        return answerDegus.textContent = 'Âge non pris en compte'
    }
    let ageDegusAnswer = ageDegus * 8
    answerDegus.style.color = 'blue'
    answerDegus.style.fontWeight = 800
    answerDegus.textContent =  `${ageDegusAnswer} ans`
}

let btnDegus = document.querySelector('#btnDegus');
btnDegus.addEventListener('click', degusAge);



// GAME
let userAnswer = document.querySelector('#userAnswer')
let programAnswer

const start = document.querySelector('#start');
start.addEventListener('click', startGame)
let randYear = document.querySelector('#randYear')
let submit = document.querySelector('#submit')
submit.addEventListener('click', testInput)
let randYr
let count = 0
let result = document.querySelector('#result')
let score = document.querySelector('#score')
let scoreNb = document.querySelector('#scoreNb')
let chances
let rest = document.querySelector('#rest')
let restNb = document.querySelector('#restNb')

let preGame = () => alert('Vous avez 5 chances par année.\n\nBonne chance !')

document.addEventListener('DOMContentLoaded', blockGame)

function blockGame() {
    userAnswer.disabled = true
    typeof userAnswer !== 'string' || userAnswer === ' ' || userAnswer === '' ? submit.disabled = true : ''
}

function allowSubmit(){
    submit.disabled = false
}

function blockSubmit(){
    submit.disabled = true
}

function startGame(){
    answerLetter.classList.add('hiddenVisibility')
    submit.disabled === false ? submit.disabled = true : ''
    result.classList.add("hidden");
    rest.classList.remove("hidden");
    score.classList.remove("hidden");
    chances = 5
    count = 0
    restNb.textContent = chances
    scoreNb.textContent = count
    document.querySelector("#userAnswer").value = '';
    userAnswer.disabled = false
    preGame()
    game()
}

function game(){
    randYear.textContent = Math.floor(Math.random() * 109 + 1926);
    return randYr = parseInt(randYear.textContent)
}

function testInput(){
    whichOne = false
    userAnswer = document.querySelector('#userAnswer').value.toUpperCase().charAt(0)

    programAnswer = findLetter(randYr)
    if(programAnswer.includes(userAnswer) && chances !== 0){
        count++
        chances = 5
        restNb.textContent = chances
        scoreNb.textContent = count
        game()
    } else{
        chances--
        restNb.textContent = chances
        if(chances === 0){
            answerLetter.classList.toggle('hiddenVisibility')
            blockGame()
            submit.disabled = true
            randYear.textContent = ''
            rest.classList.add("hidden")
            score.classList.add("hidden")
            result.classList.remove("hidden")
            count > 4 ? result.textContent = `Wouf Wouf ! Votre score est de ${count} points !` : result.textContent = `Fin de partie, votre score est de ${count} points.`
            setTimeout(function(){ result.textContent = 'Tentez de dépasser votre propre score !' ; }, 2500);
        }
    }
}

userAnswer.addEventListener('focusin', clearInput)

function clearInput(){
    blockSubmit()
    document.querySelector("#userAnswer").value = '';
}
