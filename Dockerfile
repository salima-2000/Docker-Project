# --------------- DÉBUT COUCHE OS -------------------
FROM debian:stable-slim
# --------------- FIN COUCHE OS ---------------------

# --------------- DÉBUT COUCHE APACHE ---------------
RUN apt-get update -y && \
    apt-get install -q -y apache2
# --------------- FIN COUCHE APACHE -----------------



# --------------- DÉBUT COUCHE PHP ------------------
RUN apt-get install -q -y \
    php && \
    rm -f /var/www/html/index.html && \
    apt-get autoclean -y

COPY . /var/www/html
# --------------- FIN COUCHE PHP --------------------


# OUVERTURE DU PORT HTTP
EXPOSE 80


# RÉPERTOIRE DE TRAVAIL
WORKDIR  /var/www/html

# DÉMARRAGE DES SERVICES LORS DE L'EXÉCUTION DE L'IMAGE
ENTRYPOINT apache2ctl -D FOREGROUND