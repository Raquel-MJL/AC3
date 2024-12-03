USE BD_Mundo; 

-- 1. Muestra el idioma que se habla en cada país (indica nombre de este, lengua y si ésta es o no oficial).
SELECT c.Nombre AS Pais, i.Lengua, IF(i.Oficial = 1, 'Oficial', 'No Oficial') AS EsOficial
FROM Country c
JOIN Idiomas i ON c.CodigoPais = i.CodigoPais;

-- 2. Muestra el idioma que se habla en cada país (indica nombre de éste, lengua con el alias Idioma Hablado y si ésta, es o no oficial).
SELECT c.Nombre AS Pais, i.Lengua AS 'Idioma Hablado', IF(i.Oficial = 1, 'Oficial', 'No Oficial') AS EsOficial
FROM Country c
JOIN Idiomas i ON c.CodigoPais = i.CodigoPais;

-- 3. Señala los países en los que se habla español (indica nombre de éste, lengua y si ésta es o no oficial).
SELECT c.Nombre AS Pais, i.Lengua, IF(i.Oficial = 1, 'Oficial', 'No Oficial') AS EsOficial
FROM Country c
JOIN Idiomas i ON c.CodigoPais = i.CodigoPais
WHERE i.Lengua = 'Español';

-- 4. Muestra los países en los que se habla español como idioma oficial (indica nombre de éste, lengua y campo esoficial).
SELECT c.Nombre AS Pais, i.Lengua, i.Oficial
FROM Country c
JOIN Idiomas i ON c.CodigoPais = i.CodigoPais
WHERE i.Lengua = 'Español' AND i.Oficial = 1;

-- 5. Muestra el nombre del país realizando el producto cartesiano de las tablas Country e Idiomas, y que en el resultado no aparezcan repeticiones.
SELECT DISTINCT c.Nombre AS Pais
FROM Country c
JOIN Idiomas i ON c.CodigoPais = i.CodigoPais;

-- 6. Muestra sólo 20 países.
SELECT c.Nombre AS Pais
FROM Country c
LIMIT 20;

-- 7. Muestra los 5 países con mayor población.
SELECT c.Nombre AS Pais, c.Poblacion
FROM Country c
ORDER BY c.Poblacion DESC
LIMIT 5;

-- 8. Muestra 10 países en los que se hable español como idioma oficial.
SELECT c.Nombre AS Pais
FROM Country c
JOIN Idiomas i ON c.CodigoPais = i.CodigoPais
WHERE i.Lengua = 'Español' AND i.Oficial = 1
LIMIT 10;

-- 9. Mostrar todos los idiomas ordenados de forma ascendente.
SELECT DISTINCT Lengua
FROM Idiomas
ORDER BY Lengua ASC;

-- 10. Mostrar los 20 países que primero se independizaron.
SELECT c.Nombre AS Pais, c.AñoIndependencia
FROM Country c
ORDER BY c.AñoIndependencia ASC
LIMIT 20;

-- 11. Mostrar los 20 países que más tarde se independizaron.
SELECT c.Nombre AS Pais, c.AñoIndependencia
FROM Country c
ORDER BY c.AñoIndependencia DESC
LIMIT 20;

-- 12. Muestra el nombre de país, año de independencia y el idioma que se habla en él primer país que se independizó.
SELECT c.Nombre AS Pais, c.AñoIndependencia, i.Lengua
FROM Country c
JOIN Idiomas i ON c.CodigoPais = i.CodigoPais
ORDER BY c.AñoIndependencia ASC
LIMIT 1;

-- 13. Muestra el país, región e idioma con más población.
SELECT c.Nombre AS Pais, c.Region, i.Lengua
FROM Country c
JOIN Idiomas i ON c.CodigoPais = i.CodigoPais
ORDER BY c.Poblacion DESC
LIMIT 1;

-- 14. Mostrar los 7 primeros países en los que la esperanza de vida sea mayor.
SELECT c.Nombre AS Pais, c.EsperanzaVida
FROM Country c
ORDER BY c.EsperanzaVida DESC
LIMIT 7;

-- 15. Mostrar los países con las 7 mayores esperanza de vida.
SELECT c.Nombre AS Pais, c.EsperanzaVida
FROM Country c
ORDER BY c.EsperanzaVida DESC
LIMIT 7;

-- 16. Listar los PNB, los PNB multiplicados por 2 y también divididos por 3.
SELECT c.Nombre AS Pais, c.PNB, (c.PNB * 2) AS PNB_x2, (c.PNB / 3) AS PNB_div3
FROM Country c;

-- 17. Mostrar las ciudades de cada país.
SELECT c.Nombre AS Pais, ci.Nombre AS Ciudad
FROM Country c
JOIN Ciudades ci ON c.CodigoPais = ci.CodigoPais;

-- 18. Mostrar código de país de aquellos en los que se hable una lengua no oficial.
SELECT DISTINCT c.CodigoPais
FROM Country c
JOIN Idiomas i ON c.CodigoPais = i.CodigoPais
WHERE i.Oficial = 0;

-- 19. Mostrar nombre, continente, región y la lengua oficial de cada país.
SELECT c.Nombre AS Pais, c.Continente, c.Region, i.Lengua
FROM Country c
JOIN Idiomas i ON c.CodigoPais = i.CodigoPais
WHERE i.Oficial = 1;

-- 20. Mostrar los distintos distritos de las ciudades de Francia.
SELECT DISTINCT ci.Distrito
FROM Ciudades ci
WHERE ci.CodigoPais = (SELECT CodigoPais FROM Country WHERE Nombre = 'Francia');

-- 21. Cuál es el país asiático con superficie > 50.000 km2 y su esperanza de vida menor.
SELECT c.Nombre AS Pais, c.Superficie, c.EsperanzaVida
FROM Country c
WHERE c.Continente = 'Asia' AND c.Superficie > 50000
ORDER BY c.EsperanzaVida ASC
LIMIT 1;

-- 22. Lista de todos los datos de países de Centro América. (Usar un patrón).
SELECT *
FROM Country c
WHERE c.Region LIKE '%Centro América%';

-- 23. Ciudades holandesas cuya población es > 150.000 personas.
SELECT ci.Nombre AS Ciudad, ci.Poblacion
FROM Ciudades ci
JOIN Country c ON ci.CodigoPais = c.CodigoPais
WHERE c.Nombre = 'Países Bajos' AND ci.Poblacion > 150000;

-- 24. Muestra todos los países en los que se hable inglés.
SELECT c.Nombre AS Pais
FROM Country c
JOIN Idiomas i ON c.CodigoPais = i.CodigoPais
WHERE i.Lengua = 'Inglés';

-- 25. Mostrar las ciudades en las que se hable italiano, en orden alfabético ascendente.
SELECT ci.Nombre AS Ciudad
FROM Ciudades ci
JOIN Country c ON ci.CodigoPais = c.CodigoPais
JOIN Idiomas i ON c.CodigoPais = i.CodigoPais
WHERE i.Lengua = 'Italiano'
ORDER BY ci.Nombre ASC;
