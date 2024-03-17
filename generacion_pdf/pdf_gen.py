#!/bin/python3

from weasyprint import HTML
import jinja2

# Cargar tu plantilla HTML con Jinja2
env = jinja2.Environment(loader=jinja2.FileSystemLoader(searchpath=''))
template = env.get_template('plantilla_2.html')

# Rellenar la plantilla con tus datos
datos_cv = {
    'nombre': 'Juan Pérez',
    'experiencia': [
        {'empresa': 'Empresa XYZ', 'rol': 'Desarrollador de Software', 'años': '2021-Presente'},
        {'empresa': 'Compañía ABC', 'rol': 'Asistente de Ingeniería', 'años': '2019-2021'}
    ],
    # Añade más secciones según necesites
}
html_out = template.render(datos_cv)

# Generar el PDF
HTML(string=html_out).write_pdf('CV_Juan_Perez.pdf')
