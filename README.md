# Final-S3
Integration :       ETU 2512 RAKOTONARIVO Herinirina Olivier
Fonction et base :  ETU 2502 RAKOTOMALALA Ny Ranja Rebeca
Affichage :         ETU 2720 HERIVONY Andriamiandry

CREATE or replace VIEW vue_parcelle_variete AS
SELECT p.idParcelle, p.surface, v.nomVariete
FROM parcelles p
JOIN variete v ON p.variete = v.idVariete;