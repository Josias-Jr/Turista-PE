import smtplib
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
import mysql.connector

conexao = mysql.connector.connect(
    host='localhost',
    database='turismo',
    user='root',
    password='Francisca27032002'
)

cursor = conexao.cursor()

cursor.execute("SELECT email FROM cliente")

emails = cursor.fetchall()

cursor.close()
conexao.close()

remetente = 'turistape23@gmail.com'
senha = 'drueznpymuigzuqv'

for email in emails:
    destinatario = email[0]

    mensagem = MIMEMultipart()
    mensagem['From'] = remetente
    mensagem['To'] = destinatario
    mensagem['Subject'] = 'Descubra a Costa Nautica da coroa do Avião com RotaPE - Lugares imperdíveis!'

    corpo = f'''
    <html>
        <body>
            <p>Olá,</p>
            <p>Você já imaginou explorar os destinos mais incríveis do mundo com facilidade e economia? Com o Turismundo, tornamos seus sonhos de viagem realidade...</p>
            <p><img src="https://raw.githubusercontent.com/Josias-Jr/Turista-PE/4c38d1097785a070491f8c0ad4b2f8872b4f273d/image/plano%20de%20fundo.png" alt="Praia"></p>
            <p>Para mais informações, visite nosso <a href="https://josias-jr.github.io/Turista-PE/">site</a>.</p>
            <p>Atenciosamente,</p>
            <p>Equipe Turismundo</p>
        </body>
    </html>
    '''

    mensagem.attach(MIMEText(corpo, 'html'))

    try:
        servidor_smtp = smtplib.SMTP('smtp.gmail.com', 587)
        servidor_smtp.starttls()
        servidor_smtp.login(remetente, senha)
        texto_email = mensagem.as_string()
        servidor_smtp.sendmail(remetente, destinatario, texto_email)
        servidor_smtp.quit()
        print('E-mail enviado para', destinatario)
    except Exception as e:
        print('Ocorreu um erro ao enviar o e-mail para', destinatario, str(e))