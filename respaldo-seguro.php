
<link rel="stylesheet" type="text/css" href="https://www.seguroshfr.com/wp-content/themes/betheme/style-cotizar/style.css">
<?php get_header(); ?>
  <section class="query">
      <div class="contentForm">
        <form name="formQueryCotizar" class="formCotizar" method="post">
          <h2>Seguro de Salud</h2>
          <p>
            Seguro que brinda protección a ti y a tu familia contra el cáncer con cobertura al 100% a nivel nacional, desde la prevención
            hasta el tratamiento. así como alternativas para la atención en el extranjero
          </p>
          <label>Plan de seguro:</label>
          <select style='height:45px;' class="plan" required>
            <option selected="true" disabled="disabled">Seleccionar</option>
            <option value="saludBasica">Salud Basica</option>
            <option value="saludMixta">Salud Mixta</option>
            <option value="saludNacional">Salud Nacional</option>
            <option value="saludInternacional">Salud Internacional</option>
            <option value="saludAdulto">Salud Adulto Mayor</option>
            <option value="saludHospitalario">Salud Hospítalario</option>
            <option value="oncologicosNacional">Oncologico nacional</option>
            <option value="oncologicosInternacional">Oncologico internacional</option>
          </select>
          <label>Edad del titular:</label>
          <select style='height:45px;' class="clientAge" required>
            <option selected="true" disabled="disabled">Seleccionar</option>
          </select>
          <label class="addFamily addFamily__Title">¿Deseas Agregar a tus familiares?</label>
          <div class="addFamily addFamily__Question">
            <label>Si</label>
            <input type='radio' name='addFamily' id='addFamilyOn'>

            <label>No</label>
            <input type='radio' name='addFamily' id='addFamilyOff' checked>
          </div>
          <div class="addFamily addFamily__Content d-none">
            <button class="btnAddFamily">Agregar mas dependientes</button>
          </div>
          <button type="submit" class="btnSubmit">COTIZAR</button>
        </form>
      </div>
      <div class="contentInf">
        <h1 style='font-size:50px;'><b>Seguro para personas</b></h1><br>
        <h3 style='margin-bottom:30px;'>
          <b>Mejores Seguros de Salud del Perú</b>
        </h3>
        <div class='w3-container'>
        <div class="w3-col s3">
          <img src="https://www.seguroshfr.com/wp-content/uploads/2018/04/positiva.png" alt="positiva" >
        </div>
        <div class="w3-col s3">
          <img src="https://www.seguroshfr.com/wp-content/uploads/2018/04/mafre.png" alt="maphre" >
        </div>
        <div class="w3-col s3">
          <img src="https://www.seguroshfr.com/wp-content/uploads/2018/03/rimac.png" alt="rimac" >
        </div>
        <div class="w3-col s3">
          <img src="https://www.seguroshfr.com/wp-content/uploads/2018/03/pacifico.png" alt="pacifico" >
        </div>
        </div>
        <p>
          Cotiza en segundos los planes de todas las aseguradoras, desde los básicos hasta los que cuentan con reembolso y cobertura
          internacional
        </p>
        <p>
          Trabajamos con Pacifico, Rimac, La Positiva y Mapfre
        </p>
        <p>
          El seguro médico o de salud es la mejor manera de tener la tranquilidad que los gastos por tratamientos de enfermedades o
          accidentes estarán cubiertos.
        </p>
        <p>
          Cubren el pago de las atenciones en las mejores clínicas en Lima y provincias, ya sean ambulatorias, hospitalarias, emergencias,
          maternidad, oncológicas, médicas a domicilio, chequeos preventivos, entre otros beneficios detallados en cada plan.
        </p>
        <p>
          Contamos con planes de Seguro de Salud para todos los bolsillos, desde baratos y muy económicos, en donde se atiende en red
          de clínicas especialmente seleccionadas, hasta los más completos con atención en las principales clínicas a nivel
          nacional e internacional.
        </p>
        <p>
          Solo debes cotizar y analizar cuál es el producto que se ajusta de tus necesidades y a las de tu familia de ser el caso.
          De tener alguna duda o consulta, no dudes en contactarnos para resolverlas a la brevedad.
        </p>
      </div>
      <div class="contentResult d-none">
        
      </div>
      
    </section>
   <!-- <script src="https://www.seguroshfr.com/wp-content/themes/betheme/javas/main.js"></script>-->
   
   <script>
   const objetDb = {
  "saludBasica": [{
    "aseguradora": "Pacifico",
    "producto": "Red Preferente",
    "coberturaMaxima": "3.200.000",
    "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
    "coberturas": [{
      "cobertura": "Atencion Ambulatoria",
      "locations": [{
        "location" : "En el peru",
        "content" : [{
          "name": "Atencion en clinicas de credito",
          "content":[{
            "clinica": "Red SANNA - Centros Clinicos",
            "deducible": "S/. 60",
            "coaseguro": "100%"
          },
          {
            "clinica": "Red 1",
            "deducible": "S/. 45",
            "coaseguro": "80%"
          },
          {
            "clinica": "Red 2",
            "deducible": "S/.60",
            "coaseguro": "75%"
          },
          {
            "clinica": "Red 3",
            "deducible": "S/ 75",
            "coaseguro": "70%"
          }]
        }]
      }]
    }],
    "primas": {
      "titular": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }},
    {
      "aseguradora": "Rimac",
      "producto": "Red Preferente",
      "coberturaMaxima": "1.000.000<br>",
      "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
        "coberturas": [{
        "cobertura": "Atencion Ambulatoria",
        "locations": [{
          "location" : "En el peru",
          "content" : [{
            "name": "Atencion en clinicas de credito",
            "content":[{
              "clinica": "Red SANNA - Centros Clinicos",
              "deducible": "S/. 60",
              "coaseguro": "100%"
            },
            {
              "clinica": "Red 1",
              "deducible": "S/. 45",
              "coaseguro": "80%"
            },
            {
              "clinica": "Red 2",
              "deducible": "S/.60",
              "coaseguro": "75%"
            },
            {
              "clinica": "Red 3",
              "deducible": "S/ 75",
              "coaseguro": "70%"
            }]
          }]
        }]
      }],
      "primas": {
      "titular": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }},
    {
      "aseguradora": "mapfre",
      "producto": "VIVA SALUD GENERICO",
      "coberturaMaxima": "3.200.000",
      "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
        "coberturas": [{
        "cobertura": "Atencion Ambulatoria",
        "locations": [{
          "location" : "En el peru",
          "content" : [{
            "name": "Atencion en clinicas de credito",
            "content":[{
              "clinica": "Red SANNA - Centros Clinicos",
              "deducible": "S/. 60",
              "coaseguro": "100%"
            },
            {
              "clinica": "Red 1",
              "deducible": "S/. 45",
              "coaseguro": "80%"
            },
            {
              "clinica": "Red 2",
              "deducible": "S/.60",
              "coaseguro": "75%"
            },
            {
              "clinica": "Red 3",
              "deducible": "S/ 75",
              "coaseguro": "70%"
            }]
          }]
        }]
      }],
      "primas": {
      "titular": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }},
    {
      "aseguradora": "positiva",
      "producto": "KIO DAY SALUD",
      "coberturaMaxima": "3.200.000",
      "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
        "coberturas": [{
        "cobertura": "Atencion Ambulatoria",
        "locations": [{
          "location" : "En el peru",
          "content" : [{
            "name": "Atencion en clinicas de credito",
            "content":[{
              "clinica": "Red SANNA - Centros Clinicos",
              "deducible": "S/. 60",
              "coaseguro": "100%"
            },
            {
              "clinica": "Red 1",
              "deducible": "S/. 45",
              "coaseguro": "80%"
            },
            {
              "clinica": "Red 2",
              "deducible": "S/.60",
              "coaseguro": "75%"
            },
            {
              "clinica": "Red 3",
              "deducible": "S/ 75",
              "coaseguro": "70%"
            }]
          }]
        }]
      }],
      "primas": {
      "titular": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }}
  ],
  "saludMixta": [{
    "aseguradora": "Pacifico",
    "producto": "Red Preferente",
    "coberturaMaxima": "3.200.000",
    "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
    "coberturas": [{
      "cobertura": "Atencion Ambulatoria",
      "locations": [{
        "location" : "En el peru",
        "content" : [{
          "name": "Atencion en clinicas de credito",
          "content":[{
            "clinica": "Red SANNA - Centros Clinicos",
            "deducible": "S/. 60",
            "coaseguro": "100%"
          },
          {
            "clinica": "Red 1",
            "deducible": "S/. 45",
            "coaseguro": "80%"
          },
          {
            "clinica": "Red 2",
            "deducible": "S/.60",
            "coaseguro": "75%"
          },
          {
            "clinica": "Red 3",
            "deducible": "S/ 75",
            "coaseguro": "70%"
          }]
        }]
      }]
    }],
    "primas": {
      "titular": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }},
    {
      "aseguradora": "Rimac",
      "producto": "Red Preferente",
      "coberturaMaxima": "3.200.000",
      "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
        "coberturas": [{
        "cobertura": "Atencion Ambulatoria",
        "locations": [{
          "location" : "En el peru",
          "content" : [{
            "name": "Atencion en clinicas de credito",
            "content":[{
              "clinica": "Red SANNA - Centros Clinicos",
              "deducible": "S/. 60",
              "coaseguro": "100%"
            },
            {
              "clinica": "Red 1",
              "deducible": "S/. 45",
              "coaseguro": "80%"
            },
            {
              "clinica": "Red 2",
              "deducible": "S/.60",
              "coaseguro": "75%"
            },
            {
              "clinica": "Red 3",
              "deducible": "S/ 75",
              "coaseguro": "70%"
            }]
          }]
        }]
      }],
      "primas": {
      "titular": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }},
    {
      "aseguradora": "mapfre",
      "producto": "VIVA SALUD GENERICO",
      "coberturaMaxima": "3.200.000",
      "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
        "coberturas": [{
        "cobertura": "Atencion Ambulatoria",
        "locations": [{
          "location" : "En el peru",
          "content" : [{
            "name": "Atencion en clinicas de credito",
            "content":[{
              "clinica": "Red SANNA - Centros Clinicos",
              "deducible": "S/. 60",
              "coaseguro": "100%"
            },
            {
              "clinica": "Red 1",
              "deducible": "S/. 45",
              "coaseguro": "80%"
            },
            {
              "clinica": "Red 2",
              "deducible": "S/.60",
              "coaseguro": "75%"
            },
            {
              "clinica": "Red 3",
              "deducible": "S/ 75",
              "coaseguro": "70%"
            }]
          }]
        }]
      }],
      "primas": {
      "titular": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }},
    {
      "aseguradora": "positiva",
      "producto": "KIO DAY SALUD",
      "coberturaMaxima": "3.200.000",
      "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
        "coberturas": [{
        "cobertura": "Atencion Ambulatoria",
        "locations": [{
          "location" : "En el peru",
          "content" : [{
            "name": "Atencion en clinicas de credito",
            "content":[{
              "clinica": "Red SANNA - Centros Clinicos",
              "deducible": "S/. 60",
              "coaseguro": "100%"
            },
            {
              "clinica": "Red 1",
              "deducible": "S/. 45",
              "coaseguro": "80%"
            },
            {
              "clinica": "Red 2",
              "deducible": "S/.60",
              "coaseguro": "75%"
            },
            {
              "clinica": "Red 3",
              "deducible": "S/ 75",
              "coaseguro": "70%"
            }]
          }]
        }]
      }],
      "primas": {
      "titular": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }}
  ],"saludInternacional": [{
    "aseguradora": "Pacifico",
    "producto": "Red Preferente",
    "coberturaMaxima": "3.200.000",
    "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
    "coberturas": [{
      "cobertura": "Atencion Ambulatoria",
      "locations": [{
        "location" : "En el peru",
        "content" : [{
          "name": "Atencion en clinicas de credito",
          "content":[{
            "clinica": "Red SANNA - Centros Clinicos",
            "deducible": "S/. 60",
            "coaseguro": "100%"
          },
          {
            "clinica": "Red 1",
            "deducible": "S/. 45",
            "coaseguro": "80%"
          },
          {
            "clinica": "Red 2",
            "deducible": "S/.60",
            "coaseguro": "75%"
          },
          {
            "clinica": "Red 3",
            "deducible": "S/ 75",
            "coaseguro": "70%"
          }]
        }]
      }]
    }],
    "primas": {
      "titular": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }},
    {
      "aseguradora": "Rimac",
      "producto": "Red Preferente",
      "coberturaMaxima": "3.200.000",
      "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
        "coberturas": [{
        "cobertura": "Atencion Ambulatoria",
        "locations": [{
          "location" : "En el peru",
          "content" : [{
            "name": "Atencion en clinicas de credito",
            "content":[{
              "clinica": "Red SANNA - Centros Clinicos",
              "deducible": "S/. 60",
              "coaseguro": "100%"
            },
            {
              "clinica": "Red 1",
              "deducible": "S/. 45",
              "coaseguro": "80%"
            },
            {
              "clinica": "Red 2",
              "deducible": "S/.60",
              "coaseguro": "75%"
            },
            {
              "clinica": "Red 3",
              "deducible": "S/ 75",
              "coaseguro": "70%"
            }]
          }]
        }]
      }],
      "primas": {
      "titular": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }},
    {
      "aseguradora": "mapfre",
      "producto": "VIVA SALUD GENERICO",
      "coberturaMaxima": "3.200.000",
      "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
        "coberturas": [{
        "cobertura": "Atencion Ambulatoria",
        "locations": [{
          "location" : "En el peru",
          "content" : [{
            "name": "Atencion en clinicas de credito",
            "content":[{
              "clinica": "Red SANNA - Centros Clinicos",
              "deducible": "S/. 60",
              "coaseguro": "100%"
            },
            {
              "clinica": "Red 1",
              "deducible": "S/. 45",
              "coaseguro": "80%"
            },
            {
              "clinica": "Red 2",
              "deducible": "S/.60",
              "coaseguro": "75%"
            },
            {
              "clinica": "Red 3",
              "deducible": "S/ 75",
              "coaseguro": "70%"
            }]
          }]
        }]
      }],
      "primas": {
      "titular": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }},
    {
      "aseguradora": "positiva",
      "producto": "KIO DAY SALUD",
      "coberturaMaxima": "3.200.000",
      "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
        "coberturas": [{
        "cobertura": "Atencion Ambulatoria",
        "locations": [{
          "location" : "En el peru",
          "content" : [{
            "name": "Atencion en clinicas de credito",
            "content":[{
              "clinica": "Red SANNA - Centros Clinicos",
              "deducible": "S/. 60",
              "coaseguro": "100%"
            },
            {
              "clinica": "Red 1",
              "deducible": "S/. 45",
              "coaseguro": "80%"
            },
            {
              "clinica": "Red 2",
              "deducible": "S/.60",
              "coaseguro": "75%"
            },
            {
              "clinica": "Red 3",
              "deducible": "S/ 75",
              "coaseguro": "70%"
            }]
          }]
        }]
      }],
      "primas": {
      "titular": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }}
  ],"saludAdulto": [{
    "aseguradora": "Pacifico",
    "producto": "Red Preferente",
    "coberturaMaxima": "3.200.000",
    "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
    "coberturas": [{
      "cobertura": "Atencion Ambulatoria",
      "locations": [{
        "location" : "En el peru",
        "content" : [{
          "name": "Atencion en clinicas de credito",
          "content":[{
            "clinica": "Red SANNA - Centros Clinicos",
            "deducible": "S/. 60",
            "coaseguro": "100%"
          },
          {
            "clinica": "Red 1",
            "deducible": "S/. 45",
            "coaseguro": "80%"
          },
          {
            "clinica": "Red 2",
            "deducible": "S/.60",
            "coaseguro": "75%"
          },
          {
            "clinica": "Red 3",
            "deducible": "S/ 75",
            "coaseguro": "70%"
          }]
        }]
      }]
    }],
    "primas": {
      "titular": [
        {
          "50": 2809.33
        },
        {
          "51": 2809.33
        },
        {
          "52": 2809.33
        },
        {
          "53": 2809.33
        },
        {
          "54": 2809.33
        },
        {
          "55": 2809.33
        },
        {
          "56": 2809.33
        },
        {
          "57": 2809.33
        },
        {
          "58": 2809.33
        },
        {
          "59": 2809.33
        },
        {
          "60": 2809.33
        },
        {
          "61": 2809.33
        },
        {
          "62": 2809.33
        },
        {
          "63": 2809.33
        },
        {
          "64": 2809.33
        },
        {
          "65": 2809.33
        },
        {
          "66": 2809.33
        },
        {
          "67": 2809.33
        },
        {
          "68": 2809.33
        },
        {
          "69": 2809.33
        },{
          "70": 2809.33
        }
        ,{
          "71": 2809.33
        },
        {
          "72": 2809.33
        },
        {
          "73": 2809.33
        },
        {
          "74": 2809.33
        },
        {
          "75": 2809.33
        },
        {
          "76": 2809.33
        },
        {
          "77": 2809.33
        },
        {
          "78": 2809.33
        },
        {
          "79": 2809.33
        },
        {
          "80": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }},
    {
      "aseguradora": "Rimac",
      "producto": "Red Preferente",
      "coberturaMaxima": "3.200.000",
      "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
        "coberturas": [{
        "cobertura": "Atencion Ambulatoria",
        "locations": [{
          "location" : "En el peru",
          "content" : [{
            "name": "Atencion en clinicas de credito",
            "content":[{
              "clinica": "Red SANNA - Centros Clinicos",
              "deducible": "S/. 60",
              "coaseguro": "100%"
            },
            {
              "clinica": "Red 1",
              "deducible": "S/. 45",
              "coaseguro": "80%"
            },
            {
              "clinica": "Red 2",
              "deducible": "S/.60",
              "coaseguro": "75%"
            },
            {
              "clinica": "Red 3",
              "deducible": "S/ 75",
              "coaseguro": "70%"
            }]
          }]
        }]
      }],
      "primas": {
      "titular": [
        {
          "50": 2809.33
        },
        {
          "51": 2809.33
        },
        {
          "52": 2809.33
        },
        {
          "53": 2809.33
        },
        {
          "54": 2809.33
        },
        {
          "55": 2809.33
        },
        {
          "56": 2809.33
        },
        {
          "57": 2809.33
        },
        {
          "58": 2809.33
        },
        {
          "59": 2809.33
        },
        {
          "60": 2809.33
        },
        {
          "61": 2809.33
        },
        {
          "62": 2809.33
        },
        {
          "63": 2809.33
        },
        {
          "64": 2809.33
        },
        {
          "65": 2809.33
        },
        {
          "66": 2809.33
        },
        {
          "67": 2809.33
        },
        {
          "68": 2809.33
        },
        {
          "69": 2809.33
        },{
          "70": 2809.33
        }
        ,{
          "71": 2809.33
        },
        {
          "72": 2809.33
        },
        {
          "73": 2809.33
        },
        {
          "74": 2809.33
        },
        {
          "75": 2809.33
        },
        {
          "76": 2809.33
        },
        {
          "77": 2809.33
        },
        {
          "78": 2809.33
        },
        {
          "79": 2809.33
        },
        {
          "80": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }},
    {
      "aseguradora": "mapfre",
      "producto": "VIVA SALUD GENERICO",
      "coberturaMaxima": "3.200.000",
      "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
        "coberturas": [{
        "cobertura": "Atencion Ambulatoria",
        "locations": [{
          "location" : "En el peru",
          "content" : [{
            "name": "Atencion en clinicas de credito",
            "content":[{
              "clinica": "Red SANNA - Centros Clinicos",
              "deducible": "S/. 60",
              "coaseguro": "100%"
            },
            {
              "clinica": "Red 1",
              "deducible": "S/. 45",
              "coaseguro": "80%"
            },
            {
              "clinica": "Red 2",
              "deducible": "S/.60",
              "coaseguro": "75%"
            },
            {
              "clinica": "Red 3",
              "deducible": "S/ 75",
              "coaseguro": "70%"
            }]
          }]
        }]
      }],
      "primas": {
      "titular": [
        {
          "50": 2809.33
        },
        {
          "51": 2809.33
        },
        {
          "52": 2809.33
        },
        {
          "53": 2809.33
        },
        {
          "54": 2809.33
        },
        {
          "55": 2809.33
        },
        {
          "56": 2809.33
        },
        {
          "57": 2809.33
        },
        {
          "58": 2809.33
        },
        {
          "59": 2809.33
        },
        {
          "60": 2809.33
        },
        {
          "61": 2809.33
        },
        {
          "62": 2809.33
        },
        {
          "63": 2809.33
        },
        {
          "64": 2809.33
        },
        {
          "65": 2809.33
        },
        {
          "66": 2809.33
        },
        {
          "67": 2809.33
        },
        {
          "68": 2809.33
        },
        {
          "69": 2809.33
        },{
          "70": 2809.33
        }
        ,{
          "71": 2809.33
        },
        {
          "72": 2809.33
        },
        {
          "73": 2809.33
        },
        {
          "74": 2809.33
        },
        {
          "75": 2809.33
        },
        {
          "76": 2809.33
        },
        {
          "77": 2809.33
        },
        {
          "78": 2809.33
        },
        {
          "79": 2809.33
        },
        {
          "80": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }},
    {
      "aseguradora": "positiva",
      "producto": "KIO DAY SALUD",
      "coberturaMaxima": "3.200.000",
      "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
        "coberturas": [{
        "cobertura": "Atencion Ambulatoria",
        "locations": [{
          "location" : "En el peru",
          "content" : [{
            "name": "Atencion en clinicas de credito",
            "content":[{
              "clinica": "Red SANNA - Centros Clinicos",
              "deducible": "S/. 60",
              "coaseguro": "100%"
            },
            {
              "clinica": "Red 1",
              "deducible": "S/. 45",
              "coaseguro": "80%"
            },
            {
              "clinica": "Red 2",
              "deducible": "S/.60",
              "coaseguro": "75%"
            },
            {
              "clinica": "Red 3",
              "deducible": "S/ 75",
              "coaseguro": "70%"
            }]
          }]
        }]
      }],
      "primas": {
      "titular": [
        {
          "50": 2809.33
        },
        {
          "51": 2809.33
        },
        {
          "52": 2809.33
        },
        {
          "53": 2809.33
        },
        {
          "54": 2809.33
        },
        {
          "55": 2809.33
        },
        {
          "56": 2809.33
        },
        {
          "57": 2809.33
        },
        {
          "58": 2809.33
        },
        {
          "59": 2809.33
        },
        {
          "60": 2809.33
        },
        {
          "61": 2809.33
        },
        {
          "62": 2809.33
        },
        {
          "63": 2809.33
        },
        {
          "64": 2809.33
        },
        {
          "65": 2809.33
        },
        {
          "66": 2809.33
        },
        {
          "67": 2809.33
        },
        {
          "68": 2809.33
        },
        {
          "69": 2809.33
        },{
          "70": 2809.33
        }
        ,{
          "71": 2809.33
        },
        {
          "72": 2809.33
        },
        {
          "73": 2809.33
        },
        {
          "74": 2809.33
        },
        {
          "75": 2809.33
        },
        {
          "76": 2809.33
        },
        {
          "77": 2809.33
        },
        {
          "78": 2809.33
        },
        {
          "79": 2809.33
        },
        {
          "80": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }}
  ],"saludHospitalario": [{
    "aseguradora": "Pacifico",
    "producto": "Red Preferente",
    "coberturaMaxima": "3.200.000",
    "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
    "coberturas": [{
      "cobertura": "Atencion Ambulatoria",
      "locations": [{
        "location" : "En el peru",
        "content" : [{
          "name": "Atencion en clinicas de credito",
          "content":[{
            "clinica": "Red SANNA - Centros Clinicos",
            "deducible": "S/. 60",
            "coaseguro": "100%"
          },
          {
            "clinica": "Red 1",
            "deducible": "S/. 45",
            "coaseguro": "80%"
          },
          {
            "clinica": "Red 2",
            "deducible": "S/.60",
            "coaseguro": "75%"
          },
          {
            "clinica": "Red 3",
            "deducible": "S/ 75",
            "coaseguro": "70%"
          }]
        }]
      }]
    }],
    "primas": {
      "titular": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }},
    {
      "aseguradora": "Rimac",
      "producto": "Red Preferente",
      "coberturaMaxima": "3.200.000",
      "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
        "coberturas": [{
        "cobertura": "Atencion Ambulatoria",
        "locations": [{
          "location" : "En el peru",
          "content" : [{
            "name": "Atencion en clinicas de credito",
            "content":[{
              "clinica": "Red SANNA - Centros Clinicos",
              "deducible": "S/. 60",
              "coaseguro": "100%"
            },
            {
              "clinica": "Red 1",
              "deducible": "S/. 45",
              "coaseguro": "80%"
            },
            {
              "clinica": "Red 2",
              "deducible": "S/.60",
              "coaseguro": "75%"
            },
            {
              "clinica": "Red 3",
              "deducible": "S/ 75",
              "coaseguro": "70%"
            }]
          }]
        }]
      }],
      "primas": {
      "titular": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }},
    {
      "aseguradora": "mapfre",
      "producto": "VIVA SALUD GENERICO",
      "coberturaMaxima": "3.200.000",
      "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
        "coberturas": [{
        "cobertura": "Atencion Ambulatoria",
        "locations": [{
          "location" : "En el peru",
          "content" : [{
            "name": "Atencion en clinicas de credito",
            "content":[{
              "clinica": "Red SANNA - Centros Clinicos",
              "deducible": "S/. 60",
              "coaseguro": "100%"
            },
            {
              "clinica": "Red 1",
              "deducible": "S/. 45",
              "coaseguro": "80%"
            },
            {
              "clinica": "Red 2",
              "deducible": "S/.60",
              "coaseguro": "75%"
            },
            {
              "clinica": "Red 3",
              "deducible": "S/ 75",
              "coaseguro": "70%"
            }]
          }]
        }]
      }],
      "primas": {
      "titular": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }},
    {
      "aseguradora": "positiva",
      "producto": "KIO DAY SALUD",
      "coberturaMaxima": "3.200.000",
      "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
        "coberturas": [{
        "cobertura": "Atencion Ambulatoria",
        "locations": [{
          "location" : "En el peru",
          "content" : [{
            "name": "Atencion en clinicas de credito",
            "content":[{
              "clinica": "Red SANNA - Centros Clinicos",
              "deducible": "S/. 60",
              "coaseguro": "100%"
            },
            {
              "clinica": "Red 1",
              "deducible": "S/. 45",
              "coaseguro": "80%"
            },
            {
              "clinica": "Red 2",
              "deducible": "S/.60",
              "coaseguro": "75%"
            },
            {
              "clinica": "Red 3",
              "deducible": "S/ 75",
              "coaseguro": "70%"
            }]
          }]
        }]
      }],
      "primas": {
      "titular": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }}
  ],"oncologicosNacional": [{
    "aseguradora": "Pacifico",
    "producto": "Red Preferente",
    "coberturaMaxima": "3.200.000",
    "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
    "coberturas": [{
      "cobertura": "Atencion Ambulatoria",
      "locations": [{
        "location" : "En el peru",
        "content" : [{
          "name": "Atencion en clinicas de credito",
          "content":[{
            "clinica": "Red SANNA - Centros Clinicos",
            "deducible": "S/. 60",
            "coaseguro": "100%"
          },
          {
            "clinica": "Red 1",
            "deducible": "S/. 45",
            "coaseguro": "80%"
          },
          {
            "clinica": "Red 2",
            "deducible": "S/.60",
            "coaseguro": "75%"
          },
          {
            "clinica": "Red 3",
            "deducible": "S/ 75",
            "coaseguro": "70%"
          }]
        }]
      }]
    }],
    "primas": {
      "titular": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }},
    {
      "aseguradora": "Rimac",
      "producto": "Red Preferente",
      "coberturaMaxima": "3.200.000",
      "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
        "coberturas": [{
        "cobertura": "Atencion Ambulatoria",
        "locations": [{
          "location" : "En el peru",
          "content" : [{
            "name": "Atencion en clinicas de credito",
            "content":[{
              "clinica": "Red SANNA - Centros Clinicos",
              "deducible": "S/. 60",
              "coaseguro": "100%"
            },
            {
              "clinica": "Red 1",
              "deducible": "S/. 45",
              "coaseguro": "80%"
            },
            {
              "clinica": "Red 2",
              "deducible": "S/.60",
              "coaseguro": "75%"
            },
            {
              "clinica": "Red 3",
              "deducible": "S/ 75",
              "coaseguro": "70%"
            }]
          }]
        }]
      }],
      "primas": {
      "titular": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }},
    {
      "aseguradora": "mapfre",
      "producto": "VIVA SALUD GENERICO",
      "coberturaMaxima": "3.200.000",
      "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
        "coberturas": [{
        "cobertura": "Atencion Ambulatoria",
        "locations": [{
          "location" : "En el peru",
          "content" : [{
            "name": "Atencion en clinicas de credito",
            "content":[{
              "clinica": "Red SANNA - Centros Clinicos",
              "deducible": "S/. 60",
              "coaseguro": "100%"
            },
            {
              "clinica": "Red 1",
              "deducible": "S/. 45",
              "coaseguro": "80%"
            },
            {
              "clinica": "Red 2",
              "deducible": "S/.60",
              "coaseguro": "75%"
            },
            {
              "clinica": "Red 3",
              "deducible": "S/ 75",
              "coaseguro": "70%"
            }]
          }]
        }]
      }],
      "primas": {
      "titular": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }},
    {
      "aseguradora": "positiva",
      "producto": "KIO DAY SALUD",
      "coberturaMaxima": "3.200.000",
      "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
        "coberturas": [{
        "cobertura": "Atencion Ambulatoria",
        "locations": [{
          "location" : "En el peru",
          "content" : [{
            "name": "Atencion en clinicas de credito",
            "content":[{
              "clinica": "Red SANNA - Centros Clinicos",
              "deducible": "S/. 60",
              "coaseguro": "100%"
            },
            {
              "clinica": "Red 1",
              "deducible": "S/. 45",
              "coaseguro": "80%"
            },
            {
              "clinica": "Red 2",
              "deducible": "S/.60",
              "coaseguro": "75%"
            },
            {
              "clinica": "Red 3",
              "deducible": "S/ 75",
              "coaseguro": "70%"
            }]
          }]
        }]
      }],
      "primas": {
      "titular": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }}
  ],"saludNacional": [{
    "aseguradora": "Pacifico",
    "producto": "Red Preferente",
    "coberturaMaxima": "3.200.000",
    "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
    "coberturas": [{
      "cobertura": "Atencion Ambulatoria",
      "locations": [{
        "location" : "En el peru",
        "content" : [{
          "name": "Atencion en clinicas de credito",
          "content":[{
            "clinica": "Red SANNA - Centros Clinicos",
            "deducible": "S/. 60",
            "coaseguro": "100%"
          },
          {
            "clinica": "Red 1",
            "deducible": "S/. 45",
            "coaseguro": "80%"
          },
          {
            "clinica": "Red 2",
            "deducible": "S/.60",
            "coaseguro": "75%"
          },
          {
            "clinica": "Red 3",
            "deducible": "S/ 75",
            "coaseguro": "70%"
          }]
        }]
      }]
    }],
    "primas": {
      "titular": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }},
    {
      "aseguradora": "Rimac",
      "producto": "Red Preferente",
      "coberturaMaxima": "3.200.000",
      "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
        "coberturas": [{
        "cobertura": "Atencion Ambulatoria",
        "locations": [{
          "location" : "En el peru",
          "content" : [{
            "name": "Atencion en clinicas de credito",
            "content":[{
              "clinica": "Red SANNA - Centros Clinicos",
              "deducible": "S/. 60",
              "coaseguro": "100%"
            },
            {
              "clinica": "Red 1",
              "deducible": "S/. 45",
              "coaseguro": "80%"
            },
            {
              "clinica": "Red 2",
              "deducible": "S/.60",
              "coaseguro": "75%"
            },
            {
              "clinica": "Red 3",
              "deducible": "S/ 75",
              "coaseguro": "70%"
            }]
          }]
        }]
      }],
      "primas": {
      "titular": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }},
    {
      "aseguradora": "mapfre",
      "producto": "VIVA SALUD GENERICO",
      "coberturaMaxima": "3.200.000",
      "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
        "coberturas": [{
        "cobertura": "Atencion Ambulatoria",
        "locations": [{
          "location" : "En el peru",
          "content" : [{
            "name": "Atencion en clinicas de credito",
            "content":[{
              "clinica": "Red SANNA - Centros Clinicos",
              "deducible": "S/. 60",
              "coaseguro": "100%"
            },
            {
              "clinica": "Red 1",
              "deducible": "S/. 45",
              "coaseguro": "80%"
            },
            {
              "clinica": "Red 2",
              "deducible": "S/.60",
              "coaseguro": "75%"
            },
            {
              "clinica": "Red 3",
              "deducible": "S/ 75",
              "coaseguro": "70%"
            }]
          }]
        }]
      }],
      "primas": {
      "titular": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }},
    {
      "aseguradora": "positiva",
      "producto": "KIO DAY SALUD",
      "coberturaMaxima": "3.200.000",
      "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
        "coberturas": [{
        "cobertura": "Atencion Ambulatoria",
        "locations": [{
          "location" : "En el peru",
          "content" : [{
            "name": "Atencion en clinicas de credito",
            "content":[{
              "clinica": "Red SANNA - Centros Clinicos",
              "deducible": "S/. 60",
              "coaseguro": "100%"
            },
            {
              "clinica": "Red 1",
              "deducible": "S/. 45",
              "coaseguro": "80%"
            },
            {
              "clinica": "Red 2",
              "deducible": "S/.60",
              "coaseguro": "75%"
            },
            {
              "clinica": "Red 3",
              "deducible": "S/ 75",
              "coaseguro": "70%"
            }]
          }]
        }]
      }],
      "primas": {
      "titular": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }}
  ],"oncologicosInternacional": [{
    "aseguradora": "Pacifico",
    "producto": "Red Preferente",
    "coberturaMaxima": "3.200.000",
    "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
    "coberturas": [{
      "cobertura": "Atencion Ambulatoria",
      "locations": [{
        "location" : "En el peru",
        "content" : [{
          "name": "Atencion en clinicas de credito",
          "content":[{
            "clinica": "Red SANNA - Centros Clinicos",
            "deducible": "S/. 60",
            "coaseguro": "100%"
          },
          {
            "clinica": "Red 1",
            "deducible": "S/. 45",
            "coaseguro": "80%"
          },
          {
            "clinica": "Red 2",
            "deducible": "S/.60",
            "coaseguro": "75%"
          },
          {
            "clinica": "Red 3",
            "deducible": "S/ 75",
            "coaseguro": "70%"
          }]
        }]
      }]
    }],
    "primas": {
      "titular": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }},
    {
      "aseguradora": "Rimac",
      "producto": "Red Preferente",
      "coberturaMaxima": "3.200.000",
      "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
        "coberturas": [{
        "cobertura": "Atencion Ambulatoria",
        "locations": [{
          "location" : "En el peru",
          "content" : [{
            "name": "Atencion en clinicas de credito",
            "content":[{
              "clinica": "Red SANNA - Centros Clinicos",
              "deducible": "S/. 60",
              "coaseguro": "100%"
            },
            {
              "clinica": "Red 1",
              "deducible": "S/. 45",
              "coaseguro": "80%"
            },
            {
              "clinica": "Red 2",
              "deducible": "S/.60",
              "coaseguro": "75%"
            },
            {
              "clinica": "Red 3",
              "deducible": "S/ 75",
              "coaseguro": "70%"
            }]
          }]
        }]
      }],
      "primas": {
      "titular": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }},
    {
      "aseguradora": "mapfre",
      "producto": "VIVA SALUD GENERICO",
      "coberturaMaxima": "3.200.000",
      "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
        "coberturas": [{
        "cobertura": "Atencion Ambulatoria",
        "locations": [{
          "location" : "En el peru",
          "content" : [{
            "name": "Atencion en clinicas de credito",
            "content":[{
              "clinica": "Red SANNA - Centros Clinicos",
              "deducible": "S/. 60",
              "coaseguro": "100%"
            },
            {
              "clinica": "Red 1",
              "deducible": "S/. 45",
              "coaseguro": "80%"
            },
            {
              "clinica": "Red 2",
              "deducible": "S/.60",
              "coaseguro": "75%"
            },
            {
              "clinica": "Red 3",
              "deducible": "S/ 75",
              "coaseguro": "70%"
            }]
          }]
        }]
      }],
      "primas": {
      "titular": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }},
    {
      "aseguradora": "positiva",
      "producto": "KIO DAY SALUD",
      "coberturaMaxima": "3.200.000",
      "coberturaInstalaciones": "Atención ambulatoria y hospitalaria en centros médicos, clínicas SANNA y otras de buen nivel.",
        "coberturas": [{
        "cobertura": "Atencion Ambulatoria",
        "locations": [{
          "location" : "En el peru",
          "content" : [{
            "name": "Atencion en clinicas de credito",
            "content":[{
              "clinica": "Red SANNA - Centros Clinicos",
              "deducible": "S/. 60",
              "coaseguro": "100%"
            },
            {
              "clinica": "Red 1",
              "deducible": "S/. 45",
              "coaseguro": "80%"
            },
            {
              "clinica": "Red 2",
              "deducible": "S/.60",
              "coaseguro": "75%"
            },
            {
              "clinica": "Red 3",
              "deducible": "S/ 75",
              "coaseguro": "70%"
            }]
          }]
        }]
      }],
      "primas": {
      "titular": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ],
      "dependiente": [
        {
          "0": 1806.64
        },
        {
          "1": 1806.64
        },
        {
          "2": 1806.64
        },
        {
          "3": 1806.64
        },
        {
          "4": 1806.64
        },
        {
          "5": 1693.73
        },
        {
          "6": 1727.60
        },
        {
          "7": 1727.60
        },
        {
          "8": 1727.60
        },
        {
          "9": 1727.60
        },
        {
          "10": 1727.60
        },
        {
          "11": 1727.60
        },
        {
          "12": 1727.60
        },
        {
          "13": 1727.60
        },
        {
          "14": 1727.60
        },
        {
          "15": 1727.60
        },
        {
          "16": 1727.60
        },
        {
          "17": 1727.60
        },
        {
          "18": 1761.48
        },
        {
          "19": 1760.35
        },
        {
          "20": 1769.38
        },
        {
          "21": 1782.93
        },
        {
          "22": 1787.45
        },
        {
          "23": 1799.87
        },
        {
          "24": 1813.42
        },
        {
          "25": 1825.84
        },
        {
          "26": 1830.35
        },
        {
          "27": 1840.52
        },
        {
          "28": 1854.07
        },
        {
          "29": 1866.49
        },
        {
          "30": 1878.91
        },
        {
          "31": 2057.31
        },
        {
          "32": 2119.42
        },
        {
          "33": 2210.88
        },
        {
          "34": 2224.43
        },
        {
          "35": 2227.82
        },
        {
          "36": 2282.02
        },
        {
          "37": 2300.08
        },
        {
          "38": 2356.54
        },
        {
          "39": 2392.67
        },
        {
          "40": 2406.22
        },
        {
          "41": 2419.77
        },
        {
          "42": 2541.72
        },
        {
          "43": 2602.69
        },
        {
          "44": 2697.54
        },
        {
          "45": 2809.33
        }
      ]
    }}
  ],

}




//  Función para buscar la clase en el elemento
HTMLElement.prototype.hasClass = function (className) {
  var rgx = new RegExp('(\\s|^)' + className + '(\\s|$)');
  var match = this.className.match(rgx);
  return (match != null);
}

// Agrega una clase CSS al elemento
// @className es el nombre de la clase
HTMLElement.prototype.addClass = function (className) {
  if (!this.hasClass(className))
    this.className += " " + className;
}

// Quita una clase CSS al elemento
// @className es el nombre de la clase
HTMLElement.prototype.removeClass = function (className) {
  if (this.hasClass(className)) {
    var reg = new RegExp('(\\s|^)' + className + '(\\s|$)');
    this.className = this.className.replace(reg, ' ');
  }
}

// Formatear Numero
function formatNumber(numero) {
  if(numero){
    return numero.toString().replace(/(\d)(?:(?=\d+(?=[^\d.]))(?=(?:[0-9]{3})+\b)|(?=\d+(?=\.))(?=(?:[0-9]{3})+(?=\.)))/g, "$1,");
  }
}

// RENDERIZA LAS EDADES DINAMICAMENTE SEGUN EL PLAN O EL TIPO DE FAMILIAR
function renderAges(begin, end, parent) {
  parent.innerHTML = '<option selected="true" disabled="disabled">Seleccionar</option>';
  for (let i = begin; i <= end; i++) {
    let elementTemp = document.createElement("option");
    elementTemp.text = i;
    parent.add(elementTemp);
  }
}

// RENDERIZA LOS DEPENDIENTES DE FORMA DINAMICA
function renderFamily(type) {
  let parent = document.querySelector('.addFamily__Content'),
    elementTemp = document.createElement('div');

  elementTemp.className = 'addFamilyRow';
  elementTempHtml = '<div class="familyRelation__Content"><label>Dependiente</label><select class="familyRelation" required><option selected="true" disabled="disabled">Seleccionar</option><option value="0">Conyugue</option><option value="1">Hijo</option></select></div><div class="familyAge__Content"><label>Edad</label><select class="familyAge" required><option selected="true" disabled="disabled">Seleccionar</option></select></div>';
  elementTemp.innerHTML = (type === 2) ? `${elementTempHtml}<a href="#" class="btnRemoveFamily">Eliminar</a>` : elementTempHtml;

  parent.insertBefore(elementTemp, parent.lastElementChild);

  document.querySelectorAll('.familyRelation').forEach((elem) => {
    elem.addEventListener('change', (e) => {
      let parent = e.target.parentNode.nextElementSibling.children[1];
      if (e.target.value == 0) {
        renderAges(18, 60, parent);
      } else if (e.target.value == 1) {
        renderAges(1, 26, parent);
      }
    })
  })
}

document.addEventListener('DOMContentLoaded', () => {
  document.querySelector('form[name=formQueryCotizar]').reset();
  // GENERAR EDADES SEGUN EL TIPO DE PLAN
  document.querySelector('.plan').addEventListener('change', (e) => {
    let parent = document.querySelector('.clientAge');

    function showHiddenAddFamily(type) {
      document.querySelectorAll('.addFamily').forEach((elem) => {
        if (type === 1 && !(elem.hasClass('d-none'))) {
          elem.addClass('d-none');
          document.querySelector('#addFamilyOff').click();
        } else if (type === 2 && !(elem.hasClass('addFamily__Content')) && elem.hasClass('d-none')) {
          elem.removeClass('d-none');
        }
      })
    }
    if (e.target.value === 'saludHospitalario') {
      renderAges(0, 64, parent);
      showHiddenAddFamily(2);
    } else if (e.target.value === 'saludAdulto') {
      renderAges(50, 80, parent);
      showHiddenAddFamily(1);
    } else if (e.target.value == 'oncologicosInternacional' || e.target.value == 'oncologicosNacional') {
      renderAges(0, 80, parent);
      showHiddenAddFamily(2);
    } else {
      renderAges(0, 70, parent);
      showHiddenAddFamily(2);
    }
  })

  // MOSTRAR U OCULTAR DEPENDIENTES
  document.querySelectorAll('.addFamily__Question input').forEach((elem) => {
    elem.addEventListener('click', () => {
      if (document.querySelector('#addFamilyOn').checked) {
        renderFamily(1);
        document.querySelector('.addFamily__Content').removeClass('d-none');
      } else {
        document.querySelector('.addFamily__Content').addClass('d-none');
        document.querySelectorAll('.addFamilyRow').forEach((e) => {
          e.remove();
        })
      }
    })
  })

  document.querySelector('.btnAddFamily').addEventListener('click', (e) => {
    e.preventDefault();
    renderFamily(2);

    // REMOVER DEPENDIENTES
    document.querySelectorAll('.btnRemoveFamily').forEach((element) => {
      element.addEventListener('click', (elem) => {
        elem.preventDefault();
        elem.target.parentNode.remove();
      })
    })
  })

  document.querySelector('form[name=formQueryCotizar]').addEventListener('submit', (e) => {
    // Cancelar el evento Submit del Form
    e.preventDefault();

    // Obtener Datos del Form
      let plan = document.querySelector('.plan').value,
      edadTitular = document.querySelector('.clientAge').value,
      tipoDependiente = document.querySelectorAll('.familyRelation'), 
      edadDependiente = document.querySelectorAll('.familyAge');

  // console.log(edadDependiente);

    // Generar Resultados
    if (objetDb[plan]){
      renderResult(plan, edadTitular, tipoDependiente, edadDependiente);

      // Mostrar Resultados
      document.querySelector('.contentInf').addClass('d-none');
      document.querySelector('.contentResult').removeClass('d-none');
      document.querySelector('.contentResult').addClass('full');
      document.querySelector('.contentForm').addClass('d-none');


      
      // Limpiar Campos del Formulario
      document.querySelector('#addFamilyOff').click();
      e.target.reset();
    }else{
      alert("El plan, no se encuentra en el JSON")
    }
  })
})

function renderResult (plan, edadTitular, tipoDependiente, edadDependiente) {
  let trueBono,
    parent = document.querySelector('.contentResult'),
    elementTemp = document.createElement('table'),
    elementHTML = `<thead style='background-color:#6EBBE7;'>
                  <tr>
                    <td class="aseguradora" width="200"><h3>Aseguradora / Producto</h3></td>
                    <td class="costo_anual" width="155"><h3>Costo total anual<br>(Inc. Impuestos)</h3></td>
                    <td class="financiamiento" width="155"><h3>Financiamiento</h3></td>
                    <td class="coberturas" width="370"><h3>Coberturas / Deducibles</h3></td>
                    <td class="promociones" width="170"><h3>Promociones</h3></td>
                  </tr>
                </thead>
                <tbody>`;
  //onsole.log(objetDb[plan]);
  objetDb[plan].forEach ((e) => {
    let primaAnual = 0;
    
    // Prima Titular / Conyugue
   // console.log(e.primas.titular);
    e.primas.titular.forEach ( ( e2 ) => {
    
      if(Object.keys(e2) == edadTitular) {
        primaAnual += Object.values(e2)[0];
        //console.log("añadio Titular:", primaAnual);
      }
    //  console.log(tipoDependiente);
      tipoDependiente.forEach( (e3, i) => {
        if (e3.value == 0) {
          if(Object.keys(e2) == edadDependiente[i].value) {
            primaAnual += Object.values(e2)[0];
            //console.log ("añadio Conyugue: ", primaAnual);
          }
        }
      })
    })

    // Prima Dependiente Hijo
    e.primas.dependiente.forEach( ( e2 ) => {
      tipoDependiente.forEach( (e3, i) => {
        if (e3.value == 1) {
          if(Object.keys(e2) == edadDependiente[i].value) {
              primaAnual += Object.values(e2)[0];
              //console.log("añadio hijo: ", primaAnual);
          }
        }
      }) 
    })

    // Formatear Valores
    primaAnual = formatNumber(primaAnual);
  //console.log("format");

    trueBono = (e.promo) ? 'Bono instantáneo' : '';

    elementHTML += `<tr>
      <td class="aseguradora">
        <div class="contentLog">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/${e.aseguradora}.png" class="logoTable" width="175">
          <strong class="titlep">${e.producto}</strong>
        </div>
        <div class="contentBtnSC">
          <a href="" class="btnContratar">Solicitar</a>
          <a href="" class="btnComparar">Comparar</a>
        </div>
      </td>
      <td class="costo_anual">
        <strong>S/. ${primaAnual}</strong>
      </td>
      <td class="financiamiento">
       5 cuantas sin intereses de s/243
      </td>
      <td class="coberturas">
        Beneficio máximo anual S/. ${e.coberturaMaxima}. ${e.coberturaInstalaciones}.
      </td>
      <td class="promociones">
        <strong style="font-size:13px;margin-bottom: 7px;">${trueBono}
          <a href="#info_${e.aseguradora}_${e.producto}" class="infopro">
          
          </a>
        </strong>
        <br>
        <div style="display:none" class="modalPromo" id="info_${e.aseguradora}_${e.producto}">
          
        </div>
      </td>
    </tr>`
  })
  elementHTML += '</tbody><br><br><br><br><button type="button" onclick="location.reload(true);"id="btn-refresh">VOLVER AL COTIZADOR</button>';
  elementTemp.innerHTML = elementHTML;
  parent.innerHTML = '';
  parent.insertBefore(elementTemp, parent.lastElementChild);

  // Comparar
  /*document.querySelectorAll('.familyRelation').forEach((elem) => {
    elem.addEventListener('change', (e) => {
      let parent = e.target.parentNode.nextElementSibling.children[1];
      if (e.target.value == 0) {
        renderAges(18, 60, parent);
      } else if (e.target.value == 1) {
        renderAges(1, 26, parent);
      }
    })
  })*/

  // Contratar
  /*document.querySelectorAll('.familyRelation').forEach((elem) => {
    elem.addEventListener('change', (e) => {
      let parent = e.target.parentNode.nextElementSibling.children[1];
      if (e.target.value == 0) {
        renderAges(18, 60, parent);
      } else if (e.target.value == 1) {
        renderAges(1, 26, parent);
      }
    })
  })*/
}

    </script>
<?php  get_footer(); ?>