const signos = [
  {
    signo: 'ACUARIO',
    mesI: 1,
    diaI: 21,
    mesF: 2,
    diaF: 19,
    descripcion:
      'Acuario es un signo fijo y de aire, y sin duda, es el signo con mayor capacidad para la invención de toda la rueda zodiacal. Simpático, original y brillante, Acuario también es un signo muy humanitario, al mismo tiempo que independiente e intelectual. Sus puntos negativos se encuentran en su inestabilidad e imprecisión y en su tendencia a llevar la contraria casi por sistema.',
  },
  {
    signo: 'PISCIS',
    mesI: 2,
    diaI: 20,
    mesF: 3,
    diaF: 20,
    descripcion:
      'Piscis es un signo mutable y de agua, también es el último signo del zodiaco, precisamente por eso, es el más rico y complejo de todos. Sensible ante el sufrimiento de los demás, responde con buena voluntad y ganas de ayudar. No le gusta sentirse preso y ni respeta las convenciones, así, por las buenas, aunque tampoco tiende a luchar contra lo establecido, sencillamente, discurre por otro lado.',
  },
  {
    signo: 'ARIES',
    mesI: 3,
    diaI: 21,
    mesF: 4,
    diaF: 19,
    descripcion:
      'Aries forma parte de los signos cardinales y al mismo tiempo es un signo de fuego; también es el primer signo del zodíaco, precisamente por eso, simboliza el inicio, la creación. Se caracteriza por ser una persona rebosante de energía y entusiasmo; avanzada y aventurera, adora la libertad, los retos y las nuevas ideas.',
  },
  {
    signo: 'TAURO',
    mesI: 4,
    diaI: 20,
    mesF: 5,
    diaF: 20,
    descripcion:
      'Tauro pertenece a los signos fijos y simultáneamente es un signo de tierra. La proyección del Sol en su nacimiento suele influir para que sean personas firmes, decididas y constantes en varios sentidos. También adoran sentir seguridad, por eso la buscan tanto, es como una necesidad constante en sus vidas',
  },
  {
    signo: 'GEMINIS',
    mesI: 5,
    diaI: 21,
    mesF: 6,
    diaF: 20,
    descripcion:
      'Géminis es un signo mutable que forma parte del elemento aire; como signo de los gemelos, su carácter es doble y bastante contradictorio por complejo. Por una parte es capaz de adaptarse con facilidad y rapidez a todo, pero por otra puede resultar hipócrita. Su distintivo común es la comunicación y el ingenio.',
  },
  {
    signo: 'CANCER',
    mesI: 6,
    diaI: 21,
    mesF: 7,
    diaF: 22,
    descripcion:
      'Cáncer es un signo cardinal y comprendido dentro de los signos de agua. De los signos zodiacales, su carácter es el menos claro; puede ser desde retraído, insociable y pelma, hasta deslumbrante, atractivo y admirado por los demás. A veces es demasiado soñador, por eso equivoca el mundo real con la utopía que ha construido en su cabeza: el refugio de las fantasías que adora.',
  },
  {
    signo: 'LEO',
    mesI: 7,
    diaI: 23,
    mesF: 8,
    diaF: 22,
    descripcion:
      'El signo de Leo es fijo y de fuego, también el signo más dominante del zodíaco. Creativo y abierto, tiene ambición, valor, fuerza, autonomía y total seguridad en sí mismo: sabe dónde quiere llegar y nada ni nadie podrá evitarlo. En contrapartida, sus puntos negativos pueden ser tantos como las virtudes que tiene: vanidad, egocentrismo, arrogancia, impostura y un genio de mil demonios, entre otros defectos.',
  },
  {
    signo: 'VIRGO',
    mesI: 8,
    diaI: 23,
    mesF: 9,
    diaF: 22,
    descripcion:
      'Virgo es un signo mutable y de tierra; representado por una virgen, es un signo caracterizado por su espíritu crítico, precisión, reserva, paciencia y convencionalismo. También es lógico, metódico y aplicado, le gusta aprender y es capaz de analizar las situaciones más complejas con una claridad pasmosa.',
  },
  {
    signo: 'LIBRA',
    mesI: 9,
    diaI: 23,
    mesF: 10,
    diaF: 22,
    descripcion:
      'Libra es un signo cardinal y de aire, se encuentra además entre los signos más refinados del zodíaco; tiene elegancia, encanto, diplomacia y buen gusto, ama la belleza, es muy curioso por naturaleza y odia los conflictos. Sus puntos negativos a veces son la frivolidad y un carácter voluble.',
  },
  {
    signo: 'ESCORPIO',
    mesI: 10,
    diaI: 23,
    mesF: 11,
    diaF: 21,
    descripcion:
      'Escorpio es un signo fijo y de agua; su potencia y energía emocional son únicas en todo el zodíaco. Tiene mucha imaginación e intuición, además de una gran capacidad para el análisis, fuerza de voluntad y firmeza, aunque también es muy sensible y emocional consigo mismo y con el entorno.',
  },
  {
    signo: 'SAGITARIO',
    mesI: 11,
    diaI: 22,
    mesF: 12,
    diaF: 21,
    descripcion:
      'Sagitario pertenece a los signos mutables y su elemento es el fuego; es uno de los signos más resplandecientes y positivos del zodíaco. También es versátil, adora las aventuras y buscar nuevos horizontes, ya que tiene una mente abierta a nuevas ideas y experiencias y mantiene una actitud decidida ante la adversidad; además, frecuentemente la suerte le acompaña.',
  },
  {
    signo: 'CAPRICORNIO',
    mesI: 12,
    diaI: 22,
    mesF: 1,
    diaF: 20,
    descripcion:
      'Capricornio es un signo cardinal y de tierra, y uno de los signos del zodíaco más constante, sólido y apacible. También se caracteriza por ser prudente y práctico en todos los asuntos que le conciernen. Sus aspectos más negativos tienden hacia el pesimismo, la fijeza y la melancolía.',
  },
]

function getBase() {
  let base = document.getElementById('base').value
  let etiqueta = document.getElementById('etiquetaB')
  let txtValor = document.getElementById('valor')
  let txtEquivalencia = document.getElementById('equivalencia')
  let valorEtiqueta = etiqueta.textContent
  etiqueta.innerHTML = valorEtiqueta.substring(0, valorEtiqueta.indexOf('[') + 1) + base + ']'
  txtValor.value = null
  txtEquivalencia.value = null
}

function validarIngreso(e) {
  let opcionBase = parseInt(base.value)
  return e.which >= 48 && e.which <= 47 + opcionBase
}

function calcularEquivalencia() {
  let txtValor = document.getElementById('valor').value
  let equivalencia = document.getElementById('equivalencia')
  let decimal = parseInt(String(txtValor), base.value)
  !isNaN(decimal) ? (equivalencia.value = decimal) : alert('Error!!!')
}

function triangulo() {
  let caracter, niveles, texto
  while (true) {
    try {
      caracter = prompt('Ingrese UN caracter')
      if (caracter.length == 1) break
      alert('Ingrese UN carácter!!!')
    } catch {
    }
  }

  while (true) {
    try {
      niveles = parseInt(prompt('Ingrese cantidad de niveles'))
      if (niveles > 0) break
      alert('Ingrese un número entero mayor a cero!!!')
    } catch {
    }
  }

  for (var i = 0; i < niveles; i++) {
    document.write('&nbsp'.repeat(i * 6) + (caracter + '&nbsp'.repeat(4)).repeat((niveles - 1 - i) * 2 + 1) + '<br>')
  }
}

//Signos

function getSignos() {
  let fecha = new Date(document.getElementById('fecha').value)
  let fechaMesDia
  if (!isNaN(fecha)) {
    fechaMesDia = (fecha.getMonth() + 1) * 100 + (fecha.getDate() + 1)

    if (fechaMesDia < 121) {
      printSigno(11)
    } else if (fechaMesDia < 220) {
      printSigno(0)
    } else if (fechaMesDia < 321) {
      printSigno(1)
    } else if (fechaMesDia < 420) {
      printSigno(2)
    } else if (fechaMesDia < 521) {
      printSigno(3)
    } else if (fechaMesDia < 621) {
      printSigno(4)
    } else if (fechaMesDia < 723) {
      printSigno(5)
    } else if (fechaMesDia < 823) {
      printSigno(6)
    } else if (fechaMesDia < 923) {
      printSigno(7)
    } else if (fechaMesDia < 1023) {
      printSigno(8)
    } else if (fechaMesDia < 1122) {
      printSigno(9)
    } else if (fechaMesDia < 1222) {
      printSigno(10)
    } else {
      printSigno(11)
    }
  } else {
    alert('Ingrese una fecha válida!!!')
  }
}

function printSigno(s) {
  let signoE = signos[s]
  let rutaImg = 'https://rsc.lavanguardia.com/img/horoscopo/ico-' + signoE.signo.toLowerCase() + '.png'
  document.getElementById('imagen').innerHTML = '<img src="' + rutaImg + '">'
  document.getElementById('nombreSigno').innerHTML = '<h1>' + signoE.signo + '</h1>'
  document.getElementById('periodo').innerHTML = '<h2>Desde el ' + signoE.diaI + '/' + signoE.mesI + ' hasta el ' + signoE.diaF + '/' + signoE.mesF + '</h2>'
  document.getElementById('descripcion').innerHTML = '<p>' + signoE.descripcion + '</p>'
}
