SHOW DATABASES;



-- 1. Mostrar sólo la región de cada país
SELECT region FROM paises;

-- 2. Mostrar el código de cada país y su nombre
SELECT codigo, nombre FROM paises;

-- 3. Mostrar nombre del país, su continente y su año de independencia
SELECT nombre, continente, anio_independencia FROM paises;

-- 4. Mostrar los datos de todos los países
SELECT * FROM paises;

-- 5. Mostrar los datos de todos los países del Caribe
SELECT * FROM paises WHERE region = 'Caribe';

-- 6. Mostrar el nombre de los países con esperanza de vida mayor de 50 años
SELECT nombre FROM paises WHERE esperanza_vida > 50;

-- 7. Mostrar el nombre y superficie de los países cuya población sea mayor de 1.000.000 de personas
SELECT nombre, superficie FROM paises WHERE poblacion > 1000000;

-- 8. Mostrar los países que no sean una república
SELECT nombre FROM paises WHERE forma_gobierno != 'República';

-- 9. Mostrar nombre y forma de gobierno para todo tipo de repúblicas
SELECT nombre, forma_gobierno FROM paises WHERE forma_gobierno = 'República';

-- 10. Mostrar el código de los países cuya población esté entre 3 y 10 millones de personas
SELECT codigo FROM paises WHERE poblacion BETWEEN 3000000 AND 10000000;

-- 11. Nombre de países que se independizaron en la década de los 60 del siglo pasado
SELECT nombre FROM paises WHERE anio_independencia BETWEEN 1960 AND 1969;

-- 12. Países de Asia y África
SELECT nombre FROM paises WHERE continente IN ('Asia', 'África');

-- 13. Países que no sean de Asia ni África
SELECT nombre FROM paises WHERE continente NOT IN ('Asia', 'África');

-- 14. Países independizados en 1970, 1975 o 1980
SELECT nombre FROM paises WHERE anio_independencia IN (1970, 1975, 1980);

-- 15. Países cuyo nombre empieza con letras que van desde la “A” hasta la “D”
SELECT nombre FROM paises WHERE nombre LIKE 'A%' OR nombre LIKE 'B%' OR nombre LIKE 'C%' OR nombre LIKE 'D%';

-- 16. Países cuyo nombre empiece por “G” y tengan 6 caracteres
SELECT nombre FROM paises WHERE nombre LIKE 'G_____';

-- 17. Países con código de país que tenga como 1ª letra, cualquiera; como 2ª una B, C o D; y como 3ª: L, M, N, Ñ u O. Mostrar sólo el nombre y el código del país
SELECT nombre, codigo FROM paises WHERE codigo LIKE '_[BCD]_[LMNÑO]%';

-- 18. Países con PNB_ant desconocido
SELECT nombre FROM paises WHERE PNB_ant IS NULL;

-- 19. Países con PNB_ant conocido
SELECT nombre FROM paises WHERE PNB_ant IS NOT NULL;

-- 20. Países africanos con esperanza de vida mayor de 50 años
SELECT nombre FROM paises WHERE continente = 'África' AND esperanza_vida > 50;

-- 21. Países asiáticos con esperanza de vida entre 30 y 50 años
SELECT nombre FROM paises WHERE continente = 'Asia' AND esperanza_vida BETWEEN 30 AND 50;

-- 22. Países que sean de África, Asia o Europa (Realizar la consulta de 2 formas posibles)
-- Forma 1
SELECT nombre FROM paises WHERE continente IN ('África', 'Asia', 'Europa');

-- Forma 2
SELECT nombre FROM paises WHERE continente = 'África' OR continente = 'Asia' OR continente = 'Europa';

-- 23. Total de población por continente
SELECT continente, SUM(poblacion) AS total_poblacion FROM paises GROUP BY continente;

-- 24. Esperanza de vida media en Asia
SELECT AVG(esperanza_vida) AS esperanza_media_asia FROM paises WHERE continente = 'Asia';

-- 25. ¿Cuántos países hay en Asia?
SELECT COUNT(*) AS total_paises_asia FROM paises WHERE continente = 'Asia';

-- 26. Mostrar los datos de los países ordenados ascendentemente por su región
SELECT * FROM paises ORDER BY region;

-- 27. Mostrar los datos de todos los países ordenados desde el que se ha independizado más recientemente hasta el país con la independencia más antigua
SELECT * FROM paises ORDER BY anio_independencia DESC;

-- 28. Mostrar la población real estimada en una nueva columna, suponiendo que todos los países hoy en día han aumentado su población un 20 %
SELECT nombre, poblacion, poblacion * 1.2 AS poblacion_estimada FROM paises;