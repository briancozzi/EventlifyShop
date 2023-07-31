#FROM httpd:alpine
FROM httpd

ADD etc/infra/eventlify.conf /usr/local/apache2/conf/eventlify.conf 
RUN mkdir -p /app
ADD . /app

RUN echo "Include /usr/local/apache2/conf/eventlify.conf" \
    >> /usr/local/apache2/conf/httpd.conf