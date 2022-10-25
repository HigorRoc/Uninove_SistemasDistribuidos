from flask import Flask, jsonify

app = Flask(__name__)


# EndPoint
@app.route('/')
def index():

    home = '<h1>===== A API de teste está online =====</h1>'
    home += '<h3>Métodos da API</h3>'
    home += '/somar/valor1/valor2<br>'
    home += '/multiplicar/valor1/valor2<br>'
    home += '/dividir/valor1/valor2<br>'
    home += '/pareimpar/valor1<br>'
    return home


# vamos criar o método SOMA
@app.route('/somar/<v1>/<v2>')
def somar(v1, v2):
    tmp = {
        'Operacao': 'Adicao',
        'Valor1': v1,
        'Valor2': v2,
        'Resultado': int(v1) + int(v2)
    }
    return jsonify(tmp)


@app.route('/multiplicar/<v1>/<v2>')
def multiplicar(v1, v2):
    tmp = {
        'Operacao': 'Multiplicacao',
        'Valor1': v1,
        'Valor2': v2,
        'Resultado': int(v1) * int(v2)
    }
    return jsonify(tmp)


@app.route('/dividir/<v1>/<v2>')
def dividir(v1, v2):
    tmp = {
        'Operacao': 'Divisao',
        'Valor1': v1,
        'Valor2': v2,
        'Resultado': int(v1) / int(v2)
    }
    return jsonify(tmp)


@app.route('/pareimpar/<v1>')
def pareimpar(v1):
    tmp = {
        'Operacao': 'Par e Impar',
        'Valor1': v1,
        'Resultado': 'Par' if int(v1) % 2 == 0 else 'Impar'
    }
    return jsonify(tmp)


# Torna o app/site online
app.run(host='0.0.0.0', port=81, debug=True)
