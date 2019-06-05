


SELECT s.prenom
FROM stagiaire s, bonbon b, manger m
WHERE s.id_stagiaire = m.id_stagiaire 
AND b.id_bonbon = m.id_bonbon
AND b.nom = 'Tagada' 
AND b.saveur = 'pik';

SELECT s.prenom
FROM stagiaire s
INNER JOIN manger m ON s.id = m.id_stagiaire
INNER JOIN bonbon b ON b.id_bonbon = m.id_bonbon
WHERE b.nom = 'Tagada' 
AND b.saveur = 'pik';

