
						
						var d = new Date();
						var dm = d.getMonth() + 1;
						var dan = d.getYear();
						if(dan < 999) dan+=1900;
						calendrier(dm,dan);
						 
					function calendrier(mois,an) {
						nom_mois = new Array
						("Janvier","F&eacute;vrier","Mars","Avril","Mai","Juin","Juillet",
						"Ao&ucirc;t","Septembre","Octobre","Novembre","D&eacute;cembre");
						jour = new Array ("Lu","Ma","Me","Je","Ve","Sa","Di");
						 
						var police_entete = "Verdana,Arial"; /* police ent�te de calendrier */
						var taille_pol_entete = 1; /* taille de police 1-7 ent�te de calendrier */
						var couleur_pol_entete = "#FFFF00"; /* couleur de police ent�te de calendrier */
						var arrplan_entete = "#000000"; /* couleur d'arri�re plan ent�te de calendrier */
						var police_jours = "Verdana,Arial"; /* police affichage des jours */
						var taille_pol_jours = 1; /* taille de police 1-7 affichage des jours */
						var coul_pol_jours = "#FFFFFF"; /* couleur de police affichage des jours */
						var arrplan_jours = "#000000"; /* couleur d'arri�re plan affichage des jours */
						var couleur_dim = "red"; /* couleur de police pour dimanches */
						var couleur_cejour = "#000099"; /* couleur d'arri�re plan pour aujourd'hui */
						 
						var maintenant = new Date();
						var ce_mois = maintenant.getMonth() + 1;
						var cette_annee = maintenant.getYear();
						if(cette_annee < 999) cette_annee+=1900;
						var ce_jour = maintenant.getDate();
						var temps = new Date(an,mois-1,1);
						var Start = temps.getDay();
						if(Start > 0) Start--;
						else Start = 6;
						var Stop = 31;
						if(mois==4 ||mois==6 || mois==9 || mois==11 ) --Stop;
						if(mois==2) {
							Stop = Stop - 3;
							if(an%4==0) Stop++;
							if(an%100==0) Stop--;
							if(an%400==0) Stop++;
						}
						document.write('<table border="0,5" cellpadding="0,5" cellspacing="0,5">');
						var entete_mois = nom_mois[mois-1] + " " + an;
						inscrit_entete(entete_mois,arrplan_entete,couleur_pol_entete,taille_pol_entete,police_entete);
						var nombre_jours = 1;
						for(var i=0;i<=5;i++) {
							document.write("<tr>");
								for(var j=0;j<=5;j++) {
								if((i==0)&&(j < Start))
								inscrit_cellule(" ",arrplan_jours,coul_pol_jours,taille_pol_jours,police_jours);
									else {
									if(nombre_jours > Stop)
									inscrit_cellule(" ",arrplan_jours,coul_pol_jours,taille_pol_jours,police_jours);
										else {
										if((an==cette_annee)&&(mois==ce_mois)&&(nombre_jours==ce_jour))
										inscrit_cellule(nombre_jours,couleur_cejour,coul_pol_jours,taille_pol_jours,police_jours);
										else
										inscrit_cellule(nombre_jours,arrplan_jours,coul_pol_jours,taille_pol_jours,police_jours);
										nombre_jours++;
										}
									}
								}
								if(nombre_jours > Stop)
								inscrit_cellule(" ",arrplan_jours,couleur_dim,taille_pol_jours,police_jours);
								else {
								if((an==cette_annee)&&(mois==ce_mois)&&(nombre_jours==ce_jour))
								inscrit_cellule(nombre_jours,couleur_cejour,couleur_dim,taille_pol_jours,police_jours);
								else
								inscrit_cellule(nombre_jours,arrplan_jours,couleur_dim,taille_pol_jours,police_jours);
								nombre_jours++;
								}
							document.write("<\/tr>");
						}
						document.write("<\/table>");
					}
						 
						function inscrit_entete(titre_mois,couleurAP,couleurpolice,taillepolice,police) {
						document.write("<tr>");
						document.write('<td align="center" colspan="7" valign="middle" bgcolor="'+couleurAP+'">');
						document.write('<font size="'+taillepolice+'" color="'+couleurpolice+'" face="'+police+'"><b>');
						document.write(titre_mois);
						document.write("<\/b><\/font><\/td><\/tr>");
						document.write("<tr>");
						for(var i=0;i<=6;i++)
						inscrit_cellule(jour[i],couleurAP,couleurpolice,taillepolice,police);
						document.write("<\/tr>");
						}
						 
						function inscrit_cellule(contenu,couleurAP,couleurpolice,taillepolice,police) {
						document.write('<td align="center" valign="middle" bgcolor="'+couleurAP+'">');
						document.write('<font size="'+taillepolice+'" color="'+couleurpolice+'" face="'+police+'"><b>');
						document.write(contenu);
						document.write("<\/b><\/font><\/td>");
						}
						
