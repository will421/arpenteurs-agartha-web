import random


def printMasque(masque):
    print(masque["nom"])
    for i in range(masque["taille"]):
        print(masque["masque"][i])


def remplisMasque(masque):
    taille=masque["taille"]
    nb_trou=masque["nb_trou"]
    masque["masque"]=[[0] * taille for _ in range(taille)]
    if taille*taille-1<nb_trou:
        nb_trou=taille*taille-1
        masque["nb_trou"]=nb_trou
    while nb_trou>0:
        a=random.randint(0,taille-1)
        b=random.randint(0,taille-1)
        if masque["masque"][a][b] == 0:
            masque["masque"][a][b]=1
            nb_trou-=1
    printMasque(masque)

def verifieIntegrite(masque):


    def verifRecusive(a,b):
        if a>=0 and b>=0 and a<masque["taille"] and b<masque["taille"]:
            if masque["masque"][a][b]==0:
                masque["masque"][a][b]=-1
                verifRecusive(a-1,b)
                verifRecusive(a,b-1)
                verifRecusive(a+1,b)
                verifRecusive(a,b+1)

    def verifPasRecusive(a,b):
        pile=[[a,b]]
        while len(pile)!=0:
            a=pile[0][0]
            b=pile[0][1]
            if a>=0 and b>=0 and a<masque["taille"] and b<masque["taille"]:
                if masque["masque"][a][b]==0:
                    masque["masque"][a][b]=-1
                    pile+=[[a-1,b]]
                    pile+=[[a,b-1]]
                    pile+=[[a+1,b]]
                    pile+=[[a,b+1]]
            pile=pile[1:]

    c=random.randint(0,masque["taille"]-1)
    d=random.randint(0,masque["taille"]-1)
    while masque["masque"][c][d]!=0:
        c=random.randint(0,masque["taille"]-1)
        d=random.randint(0,masque["taille"]-1)
        # 32 car plus grande valeur supportant le recursif
    if masque["taille"]<32:
        verifRecusive(c,d)
    else:
        verifPasRecusive(c,d)
    # printMasque(masque["masque"],masque["taille"])
    retrun=True
    for i in range(len(masque["masque"])):
        for j in range(len(masque["masque"][i])):
            if masque["masque"][i][j]==0:
                retrun=False
            if masque["masque"][i][j]==-1:
                masque["masque"][i][j]=0
    return retrun

def verifieSuperposition(masque1,masque2):
    if masque1["taille"]<masque2["offset"][0] or masque1["taille"]<masque2["offset"][1] or masque2["taille"]<masque1["offset"][0] or masque2["taille"]<masque1["offset"][1]:
        return True
    retrun=True
    for i in range(max(masque1["offset"][0],masque2["offset"][0]),min(masque1["taille"]+masque1["offset"][0],masque2["taille"]+masque2["offset"][0])):
        for j in range(max(masque1["offset"][1],masque2["offset"][1]),min(masque1["taille"]+masque1["offset"][1],masque2["taille"]+masque2["offset"][1])):
            if masque1["masque"][i-masque1["offset"][0]][j-masque1["offset"][1]]==1 and masque2["masque"][i-masque2["offset"][0]][j-masque2["offset"][1]]==1:
                retrun=False
    return retrun

def chargeInstructionMasques(nomFichier):
    retrun=[]
    variables={}
    f=open(nomFichier,"r")
    fichier=f.readlines()
    f.close()
    for i in range(len(fichier)):
        fichier[i]=fichier[i].strip()
    i=0
    while i < len(fichier):
        while fichier[i]!="{":
            if fichier[i]!="":
                # print(fichier[i])
                line=fichier[i].replace("=",":").split(":")
                if len(line)==2:
                    variables[line[0]]=line[1]
            i+=1
        i+=1
        masque={}
        while fichier[i]!="}":
            if fichier[i]!="":
                line=fichier[i].replace("=",":").split(":")
                if len(line)==1:
                    ligne_masque=line[0].split(",")
                    masque["taille"]=len(ligne_masque)
                    masque["masque"]=[[0] * masque["taille"] for _ in range(masque["taille"])]
                    j=0
                    masque["nb_trou"]=0
                    while len(ligne_masque)>1:
                        for k in range(masque["taille"]):
                            masque["masque"][j][k]=int(ligne_masque[k])
                            if ligne_masque[k]=="1":
                                masque["nb_trou"]+=1
                        i+=1
                        j+=1
                        ligne_masque=fichier[i].split(",")
                    i-=1
                else:
                    if line[1][:4]=="rand":
                        if len(line[1])==4:
                            masque[line[0]]=line[1]
                        elif line[1][4]=="(":
                            bornes=line[1][5:-1].split(",")
                            masque[line[0]]=random.randint(int(bornes[0]),int(bornes[1]))
                    if line[1] in variables:
                        masque[line[0]]=variables[line[1]]
                    elif line[0] not in masque and len(line)==2:
                        masque[line[0]]=line[1]

            i+=1
        retrun+=[{}]
        ok=True
        print("masque "+str(len(retrun)))
        if "nom" in masque:
            retrun[-1]["nom"]=masque["nom"]
        else:
            print("nom manquant")
            ok=False
        if "offsetx" not in masque:
            masque["offsetx"]=0
            if "offsetx" in variables:
                masque["offsetx"]=variables["offsetx"]
            print("offsetx non defini, valeur par defaut="+str(masque["offsetx"]))
        if "offsety" not in masque:
            masque["offsety"]=0
            if "offsety" in variables:
                masque["offsety"]=variables["offsety"]
            print("offsety non defini, valeur par defaut="+str(masque["offsetx"]))
        if "offsetx" in masque and "offsety" in masque:
            retrun[-1]["offset"]=[int(masque["offsetx"]),int(masque["offsety"])]
        if "nb_trou" in masque:
            retrun[-1]["nb_trou"]=int(masque["nb_trou"])
        else:
            if "nb_trou" in variables:
                retrun[-1]["nb_trou"]=int(variables["nb_trou"])
                print("nb_trou manquant, valeur par defaut="+str(retrun[-1]["nb_trou"]))
            else:
                print("nb_trou manquant")
                ok=False
        if "taille" in masque:
            retrun[-1]["taille"]=int(masque["taille"])
        else:
            if "taille" in variables:
                retrun[-1]["taille"]=int(variables["taille"])
                print("taille manquant, valeur par defaut="+str(retrun[-1]["taille"]))
            else:
                print("taille manquant")
                ok=False
        if "masque" in masque:
            retrun[-1]["masque"]=masque["masque"]

        if not ok:
            input("masque "+str(len(retrun))+" est mal defini, il sera ignore")
            retrun=retrun[:-1]
        else:
            print("ok")
        # print(retrun)
        # print(masque)
        i+=1
        while i<len(fichier) and fichier[i]==""  :
            i+=1
    # print(variables)
    return retrun

def genereMasques(masques):
    masquesDefinis=[]
    masquesNonDefinis=[]
    ok=True
    for i in range(len(masques)):
        if "masque" in masques[i]:
            masquesDefinis+=[masques[i]]
        else:
            masquesNonDefinis+=[masques[i]]
    if len(masquesDefinis)>0:
        ok=ok and verifieIntegrite(masquesDefinis[-1])
    for i in range(len(masquesDefinis)-1):
        ok=ok and verifieIntegrite(masquesDefinis[i])
        for j in range(i+1,len(masquesDefinis)):
            ok=ok and verifieSuperposition(masquesDefinis[i],masquesDefinis[j])
    if ok:
        compteur=0
        while len(masquesNonDefinis)!=0 and compteur<100:
            test=False
            compteur=0
            while not test and compteur<100:
                test=True
                remplisMasque(masquesNonDefinis[0])
                test=test and verifieIntegrite(masquesNonDefinis[0])
                if test:
                    for i in range(len(masquesDefinis)):
                        test=test and verifieSuperposition(masquesNonDefinis[0],masquesDefinis[i])
                compteur+=1
            if compteur<100:
                masquesDefinis+=[masquesNonDefinis[0]]
                masquesNonDefinis=masquesNonDefinis[1:]
            else:
                ok=False
                print("impossible de generer des masques valides")
    else:
        print("les masques definis sont incompatibles")
    return ok

def main():
    masques=chargeInstructionMasques("masques.ins")
    if genereMasques(masques):
        print("les masques ont ete generer avec succes")
    else:
        input()



if __name__ == '__main__':
    main()
