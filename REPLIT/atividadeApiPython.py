from flask import Flask, jsonify

app = Flask(__name__)


@app.route('/')
def index():

  home = '<h1>============ SISTEMAS DISTRIBUIDOS ============</h1>'
  home += '<h3>Implementação de API Flask/Python<h3>'
  home += 'Favor informar na URL o seguinte: /peso/altura/sexo<br><br>'
  home += '- Peso: informar em Kg<br>'
  home += '- Altura: informar em Metros<br>'
  home += '- Sexo: informar "M" para Masculino e "F" para Feminino<br>'
  return home


@app.route('/<peso>/<altura>/<sexo>')
def imc(peso, altura, sexo):

    imc = round(float(peso) / (pow(float(altura), 2.0)))
  
    if sexo == 'M':
      resultado = imc
    else:
      resultado = imc - (imc * 0.127)

    categoriaP = IMCportugues(resultado)
    categoriaI = IMCingles(resultado)
  
    tmp = {
            'Portugues': {
              'Sexo': sexo,
              'IMC': resultado, 
              'Categoria': categoriaP
            },

          'Ingles': {
            'Sex': sexo,
            'IMC': resultado,
            'Category': categoriaI
          }
    }

    return jsonify(tmp)

def IMCportugues(resultado):
    categoriaP = ''
    if resultado < 16:
        categoriaP = "Magreza grave"
    elif resultado < 17:
        categoriaP = "Magreza moderada"
    elif resultado < 18.5:
        categoriaP = "Magreza leve"
    elif resultado < 25:
        categoriaP = "Saudavel"
    elif resultado < 30:
        categoriaP = "Sobrepeso"
    elif resultado < 35:
        categoriaP = "Obesidade Grau I"
    elif resultado < 40:
        categoriaP = "Obesidade Grau II"
    else:
        categoriaP = "Obesidade Grau III"  
    return categoriaP

def IMCingles(resultado):
    categoriaI = ''
    if resultado < 16:
        categoriaI = "Severely underweight"
    elif resultado < 17:
        categoriaI = "Moderatly underweight"
    elif resultado < 18.5:
        categoriaI = "Slightly underweight"
    elif resultado < 25:
        categoriaI = "Healthy"
    elif resultado < 30:
        categoriaI = "Over Weight"
    elif resultado < 35:
        categoriaI = "Obese I degree"
    elif resultado < 40:
        categoriaI = "Obese II degree"
    else:
          categoriaI = "Obese III degree"
    return categoriaI
    
# Torna o app/site online
app.run(host='0.0.0.0', port=81, debug=True)
