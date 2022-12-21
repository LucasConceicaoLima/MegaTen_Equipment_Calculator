<script src="js/scripts.js"></script>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> RE:IMAGINE Equipment Simulator </title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/novo.css">
        <link rel="stylesheet" href="css/mobile.css">
    </head>
    
    <body onload="testeOp(), atualizarLink()">

    <?php    
        print_r($_GET);
    ?>

        <header>
            <img src="imagens/logo_text.png">
            <h1>Shin Megami Tensei: Imagine Tools</h1>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="database.html">Database</a></li>
                    <li><a href="calculadora.html">Build simulator</a></li>
                    <li><a href="https://www.reimagine.online/">Global server</a></li>
                    <li><a href="contato.html">Bug report</a></li>
                </ul>
            </nav>
        </header>
        
        <div id="initial" class="flex-container">
            <form action="destino.php" method="post" autocomplete="off">
                <div id="char">
                    <label for="level">Level</label><input type="text" name="level" id="level">
                    <label for="strini">Strength</label><input type="text" name="strini" id="strini" onchange="setarPersonagem()">
                    <label for="magini">Magic</label><input type="text" name="magini" id="magini" onchange="setarPersonagem()">
                    <label for="vitini">Vitality</label><input type="text" name="vitini" id="vitini" onchange="setarPersonagem()">
                    <label for="intini">Intelligence</label><input type="text" name="intini" id="intini" onchange="setarPersonagem()">
                    <label for="spdini">Speed</label><input type="text" name="spdini" id="spdini" onchange="setarPersonagem()">
                    <label for="lucini">Luck</label><input type="text" name="lucini" id="lucini" onchange="setarPersonagem()">
                    <label for="sex">Sex</label><input type="text" name="sex" id="sex" list="charactersex" onchange="selecionarDatalists();">
                    <label for="align">Alignment</label><input type="text" name="align" id="align" list="alignment" >
                    <label for="friendship">Demon Friendship</label><input type="text" name="friendship" id="friendship" list="friendshiplist">
                </div>
                
                <div id="expertises_1">
                    <label for="attackclass">Attack</label><input type="text" name="attackclass" id="attackclass">
                    <button type="button" onclick="diminuirValor(attackclass);">↓</button><button type="button" onclick="aumentarValor(attackclass);">↑</button>
                    
                    <label for="spinclass">Spin</label><input type="text" name="spinclass" id="spinclass">
                    <button type="button" onclick="diminuirValor(spinclass);">↓</button><button type="button" onclick="aumentarValor(spinclass)">↑</button>
                    
                    <label for="rushclass">Rush</label><input type="text" name="rushclass" id="rushclass">
                    <button type="button" onclick="diminuirValor(rushclass)">↓</button><button type="button" onclick="aumentarValor(rushclass);">↑</button>
                    
                    <label for="shotclass">Shot</label><input type="text" name="shotclass" id="shotclass">
                    <button type="button" onclick="diminuirValor(shotclass);">↓</button><button type="button" onclick="aumentarValor(shotclass);">↑</button>
                    
                    <label for="rapidclass">Rapid</label><input type="text" name="rapidclass" id="rapidclass">
                    <button type="button" onclick="diminuirValor(rapidclass)">↓</button><button type="button" onclick="aumentarValor(rapidclass)">↑</button>
                    
                    <label for="guardclass">Guard</label><input type="text" name="guardclass" id="guardclass">
                    <button type="button" onclick="diminuirValor(guardclass);">↓</button><button type="button" onclick="aumentarValor(guardclass);">↑</button>
                    
                    <label for="counterclass">Counter</label><input type="text" name="counterclass" id="counterclass">
                    <button type="button" onclick="diminuirValor(counterclass)">↓</button><button type="button" onclick="aumentarValor(counterclass);">↑</button>
                    
                    <label for="dodgeclass">Dodge</label><input type="text" name="dodgeclass" id="dodgeclass">
                    <button type="button" onclick="diminuirValor(dodgeclass)">↓</button><button type="button" onclick="aumentarValor(dodgeclass);">↑</button>
                    
                    <label for="curativeclass">Curative Magic</label><input type="text" name="curativeclass" id="curativeclass">
                    <button type="button" onclick="diminuirValor(curativeclass);">↓</button><button type="button" onclick="aumentarValor(curativeclass)">↑</button>
                    
                    <label for="destructionclass">Destruction Magic</label><input type="text" name="destructionclass" id="destructionclass">
                    <button type="button" onclick="diminuirValor(destructionclass);">↓</button><button type="button" onclick="aumentarValor(destructionclass);">↑</button>
                    
                    <label for="supportclass">Support Magic</label><input type="text" name="supportclass" id="supportclass">
                    <button type="button" onclick="diminuirValor(supportclass);">↓</button><button type="button" onclick="aumentarValor(supportclass);">↑</button>
                    
                    <label for="curseclass">Curse Magic</label><input type="text" name="curseclass" id="curseclass" ><button type="button" onclick="diminuirValor(curseclass);">↓</button><button type="button" onclick="aumentarValor(curseclass);">↑</button>
                    
                    <label for="talkclass">Talk</label><input type="text" name="talkclass" id="talkclass">
                    <button type="button" onclick="diminuirValor(talkclass);">↓</button><button type="button" onclick="aumentarValor(talkclass);">↑</button>
                    
                    <label for="threatenclass">Threaten</label><input type="text" name="threatenclass" id="threatenclass">
                    <button type="button" onclick="diminuirValor(threatenclass);">↓</button><button type="button" onclick="aumentarValor(threatenclass);">↑</button>
                    
                    <label for="tauntclass">Taunt</label><input type="text" name="tauntclass" id="tauntclass">
                    <button type="button" onclick="diminuirValor(tauntclass);">↓</button><button type="button" onclick="aumentarValor(tauntclass);">↑</button>
                    
                    <label for="summonclass">Summon</label><input type="text" name="summonclass" id="summonclass">
                    <button type="button" onclick="diminuirValor(summonclass);">↓</button><button type="button" onclick="aumentarValor(summonclass);">↑</button>
                    
                    <label for="occultismclass">Occultism</label><input type="text" name="occultismclass" id="occultismclass">
                    <button type="button" onclick="diminuirValor(occultismclass);">↓</button><button type="button" onclick="aumentarValor(occultismclass);">↑</button>
                </div>
                
                <div id="expertises_2">
                    <label for="fusionclass">Fusion</label><input type="text" name="fusionclass" id="fusionclass">
                    <button type="button" onclick="diminuirValor(fusionclass);">↓</button><button type="button" onclick="aumentarValor(fusionclass);">↑</button>
                    
                    <label for="demonologyclass">Demonology</label><input type="text" name="demonologyclass" id="demonologyclass">
                    <button type="button" onclick="diminuirValor(demonologyclass);">↓</button><button type="button" onclick="aumentarValor(demonologyclass);">↑</button>
                    
                    <label for="weaponknowledgeclass">Weapon Knowledge</label><input type="text" name="weaponknowledgeclass" id="weaponknowledgeclass">
                    <button type="button" onclick="diminuirValor(weaponknowledgeclass);">↓</button><button type="button" onclick="aumentarValor(weaponknowledgeclass);">↑</button>
                    
                    <label for="survivaltechniquesclass">Survival Techniques</label><input type="text" name="survivaltechniquesclass" id="survivaltechniquesclass">
                    <button type="button" onclick="diminuirValor(survivaltechniquesclass);">↓</button><button type="button" onclick="aumentarValor(survivaltechniquesclass);">↑</button>
                    
                    <label for="psychologyclass">Psychology</label><input type="text" name="psychologyclass" id="psychologyclass">
                    <button type="button" onclick="diminuirValor(psychologyclass);">↓</button><button type="button" onclick="aumentarValor(psychologyclass);">↑</button>
                    
                    <label for="medicalsciencesclass">Medical Sciences</label><input type="text" name="medicalsciencesclass" id="medicalsciencesclass">
                    <button type="button" onclick="diminuirValor(medicalsciencesclass);">↓</button><button type="button" onclick="aumentarValor(medicalsciencesclass);">↑</button>
                    
                    <label for="crushingtechniqueclass">Crushing Techniques</label><input type="text" name="crushingtechniqueclass" id="crushingtechniqueclass">
                    <button type="button" onclick="diminuirValor(crushingtechniqueclass);">↓</button><button type="button" onclick="aumentarValor(crushingtechniqueclass);">↑</button>
                    
                    <label for="mineralogyclass">Mineralogy</label><input type="text" name="mineralogyclass" id="mineralogyclass">
                    <button type="button" onclick="diminuirValor(mineralogyclass);">↓</button><button type="button" onclick="aumentarValor(mineralogyclass);">↑</button>
                    
                    <label for="biologyclass">Biology</label><input type="text" name="biologyclass" id="biologyclass">
                    <button type="button" onclick="diminuirValor(biologyclass);">↓</button><button type="button" onclick="aumentarValor(biologyclass);">↑</button>
                    
                    <label for="bladesclass">Blades</label><input type="text" name="bladesclass" id="bladesclass">
                    <button type="button" onclick="diminuirValor(bladesclass);">↓</button><button type="button" onclick="aumentarValor(bladesclass);">↑</button>
                    
                    <label for="sketchingclass">Sketching</label><input type="text" name="sketchingclass" id="sketchingclass">
                    <button type="button" onclick="diminuirValor(sketchingclass);">↓</button><button type="button" onclick="aumentarValor(sketchingclass);">↑</button>
                    
                    <label for="creationclass">Creation</label><input type="text" name="creationclass" id="creationclass">
                    <button type="button" onclick="diminuirValor(creationclass);">↓</button><button type="button" onclick="aumentarValor(creationclass);">↑</button>
                    
                    <label for="craftsclass">Crafts</label><input type="text" name="craftsclass" id="craftsclass">
                    <button type="button" onclick="diminuirValor(craftsclass);">↓</button><button type="button" onclick="aumentarValor(craftsclass);">↑</button>
                    
                    <label for="gunknowledgeclass">Gun Knowledge</label><input type="text" name="gunknowledgeclass" id="gunknowledgeclass">
                    <button type="button" onclick="diminuirValor(gunknowledgeclass);">↓</button><button type="button" onclick="aumentarValor(gunknowledgeclass);">↑</button>
                    
                    <label for="pursuitclass">Pursuit</label><input type="text" name="pursuitclass" id="pursuitclass">
                    <button type="button" onclick="diminuirValor(pursuitclass);">↓</button><button type="button" onclick="aumentarValor(pursuitclass);">↑</button>
                    
                    <label for="magiccontrolclass">Magic Control</label><input type="text" name="magiccontrolclass" id="magiccontrolclass">
                    <button type="button" onclick="diminuirValor(magiccontrolclass);">↓</button><button type="button" onclick="aumentarValor(magiccontrolclass);">↑</button>
                    
                    <label for="blessclass">Bless</label><input type="text" name="blessclass" id="blessclass">
                    <button type="button" onclick="diminuirValor(blessclass);">↓</button><button type="button" onclick="aumentarValor(blessclass);">↑</button>
                </div>
                
                <div id="chain">
                    <label for="threeformsclass">Mastery of Three Forms of Life</label><input type="text" name="threeformsclass" id="threeformsclass">
                    <button type="button" onclick="diminuirValor(threeformsclass);">↓</button><button type="button" onclick="aumentarValor(threeformsclass);">↑</button>
                    
                    <label for="synthesisclass">Synthesis</label><input type="text" name="synthesisclass" id="synthesisclass">
                    <button type="button" onclick="diminuirValor(synthesisclass);">↓</button><button type="button" onclick="aumentarValor(synthesisclass);">↑</button>
                    
                    <label for="magicfistclass">Magic Fist</label><input type="text" name="magicfistclass" id="magicfistclass">
                    <button type="button" onclick="diminuirValor(magicfistclass);">↓</button><button type="button" onclick="aumentarValor(magicclass);">↑</button>
                    
                    <label for="mitamaclass">Mitama Demon Growth Science</label><input type="text" name="mitamaclass" id="mitamaclass">
                    <button type="button" onclick="diminuirValor(mitamaclass);">↓</button><button type="button" onclick="aumentarValor(mitamaclass);">↑</button>
                    
                    <label for="cotwclass">Curse of the Wretched</label><input type="text" name="cotwclass" id="cotwclass">
                    <button type="button" onclick="diminuirValor(cotwclass);">↓</button><button type="button" onclick="aumentarValor(cotwclass);">↑</button>
                    
                    <label for="enhancementclass">Enhancement</label><input type="text" name="enhancementclass" id="enhancementclass">
                    <button type="button" onclick="diminuirValor(enhancementclass);">↓</button><button type="button" onclick="aumentarValor(enhancementclass);">↑</button>
                    
                    <label for="supportbulletclass">Support Bullet</label><input type="text" name="supportbulletclass" id="supportbulletclass">
                    <button type="button" onclick="diminuirValor(supportbulletclass);">↓</button><button type="button" onclick="aumentarValor(supportbulletclass);">↑</button>
                    
                    
                    <label for="magicbulletclass">Magic Bullet</label><input type="text" name="magicbulletclass" id="magicbulletclass">
                    <button type="button" onclick="diminuirValor(magicbulletclass);">↓</button><button type="button" onclick="aumentarValor(magicbulletclass);">↑</button>
                    
                    <label for="sharpshooterclass">Sharpshooter</label><input type="text" name="sharpshooterclass" id="sharpshooterclass">
                    <button type="button" onclick="diminuirValor(sharpshooterclass);">↓</button><button type="button" onclick="aumentarValor(sharpshooterclass);">↑</button>
                    
                    <label for="rampageclass">Rampage</label><input type="text" name="rampageclass" id="rampageclass">
                    <button type="button" onclick="diminuirValor(rampageclass);">↓</button><button type="button" onclick="aumentarValor(rampageclass);">↑</button>
                    
                    <label for="regalclass">Regal Presence</label><input type="text" name="regalclass" id="regalclass">
                    <button type="button" onclick="diminuirValor(rampageclass);">↓</button><button type="button" onclick="aumentarValor(rampageclass);">↑</button>
                    
                    <label for="meleeconditionsclass">Conditions of Melee Combat</label><input type="text" name="meleeconditionsclass" id="meleeconditionsclass">
                    <button type="button" onclick="diminuirValor(meleeconditionsclass);">↓</button><button type="button" onclick="aumentarValor(meleeconditionsclass);">↑</button>
                    
                    <label for="rangedconditionsclass">Conditions of Ranged Combat</label><input type="text" name="rangedconditionsclass" id="rangedconditionsclass">
                    <button type="button" onclick="diminuirValor(rangedconditionsclass);">↓</button><button type="button" onclick="aumentarValor(rangedconditionsclass);">↑</button>
                    
                    <label for="magicconditionsclass">Conditions of Magic Combat</label><input type="text" name="magicconditionsclass" id="magicconditionsclass">
                    <button type="button" onclick="diminuirValor(magiccondtionsclass);">↓</button><button type="button" onclick="aumentarValor(magicconditionsclass);">↑</button>
                    
                    <label for="swordsmithclass">Swordsmith</label><input type="text" name="swordsmithclass" id="swordsmithclass">
                    <button type="button" onclick="diminuirValor(swordsmithclass);">↓</button><button type="button" onclick="aumentarValor(swordsmithclass);">↑</button>
                    
                    <label for="armsmakerclass">Arms Maker</label><input type="text" name="armsmakerclass" id="armsmakerclass">
                    <button type="button" onclick="diminuirValor(armsmakerclass);">↓</button><button type="button" onclick="aumentarValor(armsmakerclass);">↑</button>
                    
                    <label for="craftsmanshipclass">Craftsmanship</label><input type="text" name="craftsmanshipclass" id="craftsmanshipclass">
                    <button type="button" onclick="diminuirValor(craftsmanshipclass);">↓</button><button type="button" onclick="aumentarValor(craftsmanshipclass);">↑</button>
                </div>
                
                <datalist id="alignment">
                        <option value="Law"></option>
                        <option value="Neutral"></option>
                        <option value="Chaos"></option>
                    </datalist>
                
                <datalist id="charactersex">
                        <option value="Male"></option>
                        <option value="Female"></option>
                    </datalist>
                
                <datalist id="friendshiplist">
                        <option value="Wishes Death"></option>
                        <option value="Looking to Betray"></option>
                        <option value="Used like a Slave"></option>
                        <option value="Contracted"></option>
                        <option value="Good Friends"></option>
                        <option value="Trusting"></option>
                        <option value="Open Hearts"></option>
                        <option value="Linked By Fate"></option>
                    </datalist> 
            </form>
        </div>
        
        <div id="equipment">
            <form action="calculadora.php" method="get">
                     
                    <label for="head_s1">Head</label>
                    <input type="text" name="head_s1" id="head_s1" list="s1headmale" placeholder="Slot 1">
                    <input type="text" name="head_s2" id="head_s2" list="s2headmale" placeholder="Slot 2">
                    <input type="text" name="head_s3" id="head_s3" list="s3headmale" placeholder="Slot 3">
                    <input type="text" name="head_tarot" id="head_tarot" list="tarot" placeholder="Tarot" onchange="selecionarActionTarot(this.id, this.value);" autocomplete="off">
                    <input type="text" name="head_ss" id="head_ss" list="soulstonehead" placeholder="Soul Stone" onchange="calcularSoulStone(this.id);">
                    
                    <label for="face_s1">Face</label>
                    <input type="text" name="face_s1" id="face_s1" list="faces1" placeholder="Slot 1">
                    <input type="text" name="face_s2" id="face_s2" list="faces2" placeholder="Slot 2">
                    <input type="text" name="face_s3" id="face_s3" list="faces3" placeholder="Slot 3">
                    <input type="text" name="face_tarot" id="face_tarot" list="tarot" placeholder="Tarot" onchange="selecionarActionTarot(this.id, this.value);" autocomplete="off">
                    <input type="text" name="face_ss" id="face_ss" list="soulstoneface" placeholder="Soul Stone" onchange="calcularSoulStone(this.id);">
                     
                    <label for="top_s1">Top</label>
                    <input type="text" name="top_s1" id="top_s1" list="tops1" placeholder="Slot 1">
                    <input type="text" name="top_s2" id="top_s2" list="tops2" placeholder="Slot 2">
                    <input type="text" name="top_s3" id="top_s3" list="tops3" placeholder="Slot 3">
                    <input type="text" name="top_tarot" id="top_tarot" list="tarot" placeholder="Tarot" onchange="selecionarActionTarot(this.id, this.value);" autocomplete="off">
                    <input type="text" name="top_ss" id="top_ss" list="soulstonetop" placeholder="Soul Stone" onchange="calcularSoulStone(this.id);">
                     
                    <label for="bottom_s1">Bottom</label>
                    <input type="text" name="bottom_s1" id="bottom_s1" list="bottoms1" placeholder="Slot 1">
                    <input type="text" name="bottom_s2" id="bottom_s2" list="bottoms2" placeholder="Slot 2">
                    <input type="text" name="bottom_s3" id="bottom_s3" list="bottoms3" placeholder="Slot 3">
                    <input type="text" name="bottom_tarot" id="bottom_tarot" list="tarot" placeholder="Tarot" onchange="selecionarActionTarot(this.id, this.value);" autocomplete="off">
                    <input type="text" name="bottom_ss" id="bottom_ss" list="soulstonebottom" placeholder="Soul Stone" onchange="calcularSoulStone(this.id);">
                     
                    <label for="shoes_s1">Shoes</label>
                    <input type="text" name="shoes_s1" id="shoes_s1" list="shoess1" placeholder="Slot 1">
                    <input type="text" name="shoes_s2" id="shoes_s2" list="shoess2" placeholder="Slot 2">
                    <input type="text" name="shoes_s3" id="shoes_s3" list="shoess3" placeholder="Slot 3">
                    <input type="text" name="shoes_tarot" id="shoes_tarot" list="tarot" placeholder="Tarot" onchange="selecionarActionTarot(this.id, this.value);" autocomplete="off">
                    <input type="text" name="shoes_ss" id="shoes_ss" list="soulstoneshoes" placeholder="Soul Stone" onchange="calcularSoulStone(this.id);">
                     
                    <label for="hand_s1">Hand</label>
                    <input type="text" name="hand_s1" id="hand_s1" list="hands1" placeholder="Slot 1">
                    <input type="text" name="hand_s2" id="hand_s2" list="hands2" placeholder="Slot 2">
                    <input type="text" name="hand_s3" id="hand_s3" list="hands3" placeholder="Slot 3">
                    <input type="text" name="hand_tarot" id="hand_tarot" list="tarot" placeholder="Tarot" onchange="selecionarActionTarot(this.id, this.value);" autocomplete="off">
                    <input type="text" name="hand_ss" id="hand_ss" list="soulstonegloves" placeholder="Soul Stone" onchange="calcularSoulStone(this.id);">
                    
                    <label for="ring_s1">Ring</label>
                    <input type="text" name="ring_s1" id="ring_s1" list="rings1" placeholder="Slot 1">
                    <input type="text" name="ring_s2" id="ring_s2" list="rings2" placeholder="Slot 2">
                    <input type="text" name="ring_s3" id="ring_s3" list="rings3" placeholder="Slot 3">
                    <input type="text" name="ring_tarot" id="ring_tarot" list="tarot" placeholder="Tarot" onchange="selecionarActionTarot(this.id, this.value);" autocomplete="off">
                    <input type="text" name="ring_ss" id="ring_ss" list="soulstonering" placeholder="Soul Stone" onchange="calcularSoulStone(this.id);">
                     
                    <label for="earring_s1">Earring</label>
                    <input type="text" name="earring_s1" id="earring_s1" list="earrings1" placeholder="Slot 1">
                    <input type="text" name="earring_s2" id="earring_s2" list="earrings2" placeholder="Slot 2">
                    <input type="text" name="earring_s3" id="earring_s3" list="earrings3" placeholder="Slot 3">
                    <input type="text" name="earring_tarot" id="earring_tarot" list="tarot" placeholder="Tarot" onchange="selecionarActionTarot(this.id, this.value);" autocomplete="off">
                    <input type="text" name="earring_ss" id="earring_ss" list="soulstoneearring" placeholder="Soul Stone" onchange="calcularSoulStone(this.id);">
                     
                    <label for="neck_s1">Neck</label>
                    <input type="text" name="neck_s1" id="neck_s1" list="necks1" placeholder="Slot 1">
                    <input type="text" name="neck_s2" id="neck_s2" list="necks2" placeholder="Slot 2">
                    <input type="text" name="neck_s3" id="neck_s3" list="necks3" placeholder="Slot 3">
                    <input type="text" name="neck_tarot" id="neck_tarot" list="tarot" placeholder="Tarot" onchange="selecionarActionTarot(this.id, this.value);" autocomplete="off" >
                    <input type="text" name="neck_ss" id="neck_ss" list="soulstoneneck" placeholder="Soul Stone" onchange="calcularSoulStone(this.id);"> 
                
                    <label for="talisman_s1">Talisman</label>
                    <input type="text" name="talisman_s1" id="talisman_s1" list="talismans1" placeholder="Slot 1">
                    <input type="text" name="talisman_s2" id="talisman_s2" list="talismans2" placeholder="Slot 2">
                    <input type="text" name="talisman_s3" id="talisman_s3" list="talismans3" placeholder="Slot 3">
                    <input type="text" name="talisman_tarot" id="talisman_tarot" list="tarot" placeholder="Tarot" onchange="selecionarActionTarot(this.id, this.value);" autocomplete="off">
                    <input type="text" name="talisman_ss" id="talisman_ss" list="soulstonetalisman" placeholder="Soul Stone" onchange="calcularSoulStone(this.id);">
                     
                    <label for="extra_s1">Extra</label>
                    <input type="text" name="extra_s1" id="extra_s1" list="extras1" placeholder="Slot 1">
                    <input type="text" name="extra_s2" id="extra_s2" list="extras2" placeholder="Slot 2">
                    <input type="text" name="extra_s3" id="extra_s3" list="extras3" placeholder="Slot 3">
                    <input type="text" name="extra_tarot" id="extra_tarot" list="tarot" placeholder="Tarot" onchange="selecionarActionTarot(this.id, this.value);" autocomplete="off">
                    <input type="text" name="extra_ss" id="extra_ss" list="soulstoneextra" placeholder="Soul Stone" onchange="calcularSoulStone(this.id);">
                     
                    <label for="back_s1">Back</label>
                    <input type="text" name="back_s1" id="back_s1" list="backs1" placeholder="Slot 1">
                    <input type="text" name="back_s2" id="back_s2" list="backs2" placeholder="Slot 2">
                    <input type="text" name="back_s3" id="back_s3" list="backs3" placeholder="Slot 3">
                    <input type="text" name="back_tarot" id="back_tarot" list="tarot" placeholder="Tarot" onchange="selecionarActionTarot(this.id, this.value);" autocomplete="off">
                    <input type="text" name="back_ss" id="back_ss" list="soulstoneback" placeholder="Soul Stone" onchange="calcularSoulStone(this.id);">
                     
                    <label for="comp_s1">COMP</label>
                    <input type="text" name="comp_s1" id="comp_s1" list="comps1" placeholder="Slot 1">
                    <input type="text" name="comp_s2" id="comp_s2" list="comps2" placeholder="Slot 2">
                    <input type="text" name="comp_s3" id="comp_s3" list="comps3" placeholder="Slot 3">
                    <input type="text" name="comp_tarot" id="comp_tarot" list="comptarot" placeholder="Tarot" onchange="selecionarActionTarot(this.id, this.value);" autocomplete="off">
                    <input type="text" name="comp_ss" id="comp_ss" list="soulstonecomp" placeholder="Soul Stone" onchange="calcularSoulStone(this.id);">
                     
                    <label for="weapon_s1">Weapon</label>
                    <input type="text" name="weapon_s1" id="weapon_s1" list="weaponlist" placeholder="Slot 1">
                    <input type="text" name="weapon_s2" id="weapon_s2" list="weaponlist" placeholder="Slot 2">
                    <input type="text" name="weapon_s3" id="weapon_s3" list="weaponlist" placeholder="Slot 3">
                    <input type="text" name="weapon_tarot" id="weapon_tarot" list="tarot" placeholder="Tarot" onchange="selecionarActionTarot(this.id, this.value);" autocomplete="off">
                    <input type="text" name="weapon_ss" id="weapon_ss" list="soulstoneweapon" placeholder="Soul Stone" onchange="calcularSoulStone(this.id);">
                     
                    <input type="submit" value="Generate link!" onclick="gerarLink(), atualizarLink()">

                    <datalist id="tarot">
                        <option value="Fool"></option>
                        <option value="Magician"></option>
                        <option value="Priestess"></option>
                        <option value="Empress"></option>
                        <option value="Emperor"></option>
                        <option value="Hierophant"></option>
                        <option value="Lovers"></option>
                        <option value="Chariot"></option>
                        <option value="Justice"></option>
                        <option value="Hermit"></option>
                        <option value="Fortune"></option>
                        <option value="Strength"></option>
                        <option value="Hanged Man"></option>
                        <option value="Death"></option>
                        <option value="Temperance"></option>
                        <option value="Devil"></option>
                        <option value="Tower"></option>
                        <option value="Star"></option>
                        <option value="Moon"></option>
                        <option value="Sun"></option>
                        <option value="Judgment"></option>
                        <option value="World"></option>
                        <option value="Dark Token: Fool"></option>
                        <option value="Dark Token: Deep Thoughts"></option>
                        <option value="Dark Token: Moderation"></option>
                        <option value="Dark Token: Violence"></option>
                        <option value="Dark Token: Ambition"></option>
                        <option value="Dark Token: Luck"></option>
                        <option value="I of Sword"></option>
                        <option value="II of Sword"></option>
                        <option value="III of Sword"></option>
                        <option value="IV of Sword"></option>
                        <option value="V of Sword"></option>
                        <option value="VI of Sword"></option>
                        <option value="VII of Sword"></option>
                        <option value="VIII of Sword"></option>
                        <option value="IX of Sword"></option>
                        <option value="X of Sword"></option>
                        <option value="Page of Sword"></option>
                        <option value="Knight of Sword"></option>
                        <option value="Queen of Sword"></option>
                        <option value="King of Sword"></option>
                        <option value="I of Cups"></option>
                        <option value="II of Cups"></option>
                        <option value="III of Cups"></option>
                        <option value="IV of Cups"></option>
                        <option value="V of Cups"></option>
                        <option value="VI of Cups"></option>
                        <option value="VII of Cups"></option>
                        <option value="VIII of Cups"></option>
                        <option value="IX of Cups"></option>
                        <option value="X of Cups"></option>
                        <option value="Page of Cups"></option>
                        <option value="Knight of Cups"></option>
                        <option value="Queen of Cups"></option>
                        <option value="King of Cups"></option>
                        <option value="I of Rods"></option>
                        <option value="II of Rods"></option>
                        <option value="III of Rods"></option>
                        <option value="IV of Rods"></option>
                        <option value="V of Rods"></option>
                        <option value="VI of Rods"></option>
                        <option value="VII of Rods"></option>
                        <option value="VIII of Rods"></option>
                        <option value="IX of Rods"></option>
                        <option value="X of Rods"></option>
                        <option value="Page of Rods"></option>
                        <option value="Knight of Rods"></option>
                        <option value="Queen of Rods"></option>
                        <option value="King of Rods"></option>
                        <option value="I of Pentacles"></option>
                        <option value="II of Pentacles"></option>
                        <option value="III of Pentacles"></option>
                        <option value="IV of Pentacles"></option>
                        <option value="V of Pentacles"></option>
                        <option value="VI of Pentacles"></option>
                        <option value="VII of Pentacles"></option>
                        <option value="VIII of Pentacles"></option>
                        <option value="IX of Pentacles"></option>
                        <option value="X of Pentacles"></option>
                        <option value="Page of Pentacles"></option>
                        <option value="Knight of Pentacles"></option>
                        <option value="Queen of Pentacles"></option>
                        <option value="King of Pentacles"></option>
                        <option value="Dark Token: I of Sword"></option>
                        <option value="Dark Token: II of Sword"></option>
                        <option value="Dark Token: III of Sword"></option>
                        <option value="Dark Token: IV of Sword"></option>
                        <option value="Dark Token: V of Sword"></option>
                        <option value="Dark Token: VI of Sword"></option>
                        <option value="Dark Token: VII of Sword"></option>
                        <option value="Dark Token: VIII of Sword"></option>
                        <option value="Dark Token: IX of Sword"></option>
                        <option value="Dark Token: X of Sword"></option>
                        <option value="Dark Token: Page of Sword"></option>
                        <option value="Dark Token: Knight of Sword"></option>
                        <option value="Dark Token: Queen of Sword"></option>
                        <option value="Dark Token: King of Sword"></option>
                        <option value="Dark Token: I of Cups"></option>
                        <option value="Dark Token: II of Cups"></option>
                        <option value="Dark Token: III of Cups"></option>
                        <option value="Dark Token: IV of Cups"></option>
                        <option value="Dark Token: V of Cups"></option>
                        <option value="Dark Token: VI of Cups"></option>
                        <option value="Dark Token: VII of Cups"></option>
                        <option value="Dark Token: VIII of Cups"></option>
                        <option value="Dark Token: IX of Cups"></option>
                        <option value="Dark Token: X of Cups"></option>
                        <option value="Dark Token: Page of Cups"></option>
                        <option value="Dark Token: Knight of Cups"></option>
                        <option value="Dark Token: Queen of Cups"></option>
                        <option value="Dark Token: King of Cups"></option>
                        <option value="Dark Token: I of Rods"></option>
                        <option value="Dark Token: II of Rods"></option>
                        <option value="Dark Token: III of Rods"></option>
                        <option value="Dark Token: IV of Rods"></option>
                        <option value="Dark Token: V of Rods"></option>
                        <option value="Dark Token: VI of Rods"></option>
                        <option value="Dark Token: VII of Rods"></option>
                        <option value="Dark Token: VIII of Rods"></option>
                        <option value="Dark Token: IX of Rods"></option>
                        <option value="Dark Token: X of Rods"></option>
                        <option value="Dark Token: Page of Rods"></option>
                        <option value="Dark Token: Knight of Rods"></option>
                        <option value="Dark Token: Queen of Rods"></option>
                        <option value="Dark Token: King of Rods"></option>
                        <option value="Dark Token: I of Pentacles"></option>
                        <option value="Dark Token: II of Pentacles"></option>
                        <option value="Dark Token: III of Pentacles"></option>
                        <option value="Dark Token: IV of Pentacles"></option>
                        <option value="Dark Token: V of Pentacles"></option>
                        <option value="Dark Token: VI of Pentacles"></option>
                        <option value="Dark Token: VII of Pentacles"></option>
                        <option value="Dark Token: VIII of Pentacles"></option>
                        <option value="Dark Token: IX of Pentacles"></option>
                        <option value="Dark Token: X of Pentacles"></option>
                        <option value="Dark Token: Page of Pentacles"></option>
                        <option value="Dark Token: Knight of Pentacles"></option>
                        <option value="Dark Token: Queen of Pentacles"></option>
                        <option value="Dark Token: King of Pentacles"></option>
                        <option value="Luvah Crystal"></option>
                        <option value="Urthona Crystal"></option>
                        <option value="Urizen Crystal"></option>
                        <option value="Tharmas Crystal"></option>
                        <option value="Albion Crystal"></option>
                        <option value="Alilat Crystal"></option>
                        <option value="Black Maria Crystal"></option>
                        <option value="Thoth Crystal"></option>
                        <option value="Indra Crystal"></option>
                        <option value="Odin Crystal"></option>
                        <option value="Atavaka Crystal"></option>
                        <option value="Mithra Crystal"></option>
                        <option value="Thor Crystal"></option>
                        <option value="Horus Crystal"></option>
                        <option value="Baal Crystal"></option>
                        <option value="Vishnu Crystal"></option>
                        <option value="Hathor Crystal"></option>
                        <option value="Ameno-Uzume Crystal"></option>
                        <option value="Sarasvati Crystal"></option>
                        <option value="Freya Crystal"></option>
                        <option value="Fortuna Crystal"></option>
                        <option value="Sati Crystal"></option>
                        <option value="Scathach Crystal"></option>
                        <option value="Norn Crystal"></option>
                        <option value="Pallas Athena Crystal"></option>
                        <option value="Anat Crystal"></option>
                        <option value="Lakshmi Crystal"></option>
                        <option value="Baphomet Crystal"></option>
                        <option value="Tao Tie Crystal"></option>
                        <option value="Mishaguji-Sama Crystal"></option>
                        <option value="Pazuzu Crystal"></option>
                        <option value="Mada Crystal"></option>
                        <option value="Nyarlathotep Crystal"></option>
                        <option value="Samael Crystal"></option>
                        <option value="Seth Crystal"></option>
                        <option value="Omoikane Crystal"></option>
                        <option value="Tajikarao Crystal"></option>
                        <option value="Hino-Kagutsuchi Crystal"></option>
                        <option value="Take Mikazuchi Crystal"></option>
                        <option value="Tsukuyomi Crystal"></option>
                        <option value="Amaterasu(Male) Crystal"></option>
                        <option value="Amaterasu(Female) Crystal"></option>
                        <option value="Apsaras Crystal"></option>
                        <option value="Isora Crystal"></option>
                        <option value="Dis Crystal"></option>
                        <option value="Kinnari Crystal"></option>
                        <option value="Onkot Crystal"></option>
                        <option value="Efreet Crystal"></option>
                        <option value="Jinn Crystal"></option>
                        <option value="Purski Crystal"></option>
                        <option value="Ganesha Crystal"></option>
                        <option value="Uriel Crystal"></option>
                        <option value="Rafael Crystal"></option>
                        <option value="Gabriel Crystal"></option>
                        <option value="Michael Crystal"></option>
                        <option value="Seraph Crystal"></option>
                        <option value="Metatron Crystal"></option>
                        <option value="Angel Crystal"></option>
                        <option value="Archangel Crystal"></option>
                        <option value="Principality Crystal"></option>
                        <option value="Power Crystal"></option>
                        <option value="Virtue Crystal"></option>
                        <option value="Dominion Crystal"></option>
                        <option value="Throne Crystal"></option>
                        <option value="Ose Hallel Crystal"></option>
                        <option value="Flauros Hallel Crystal"></option>
                        <option value="Feng Huang Crystal"></option>
                        <option value="Jatayu Crystal"></option>
                        <option value="Phoenix Crystal"></option>
                        <option value="Suparna Crystal"></option>
                        <option value="Zhu Que Crystal"></option>
                        <option value="Yatagarasu Crystal"></option>
                        <option value="Garuda Crystal"></option>
                        <option value="Harpy Crystal"></option>
                        <option value="Macha Crystal"></option>
                        <option value="Ocypete Crystal"></option>
                        <option value="Celaeno Crystal"></option>
                        <option value="Aello Crystal"></option>
                        <option value="Badb Catha Crystal"></option>
                        <option value="Morrigan Crystal"></option>
                        <option value="Onmoraki Crystal"></option>
                        <option value="Moh Shuvuu Crystal"></option>
                        <option value="Zhen Crystal"></option>
                        <option value="Furiae Crystal"></option>
                        <option value="Camazotz Crystal"></option>
                        <option value="Anzu Crystal"></option>
                        <option value="Hresvelgr Crystal"></option>
                        <option value="Gurr Crystal"></option>
                        <option value="Kodama Crystal"></option>
                        <option value="Hua Po Crystal"></option>
                        <option value="Knocker Crystal"></option>
                        <option value="Sudama Crystal"></option>
                        <option value="Bucca-Boo Crystal"></option>
                        <option value="Dwarf Crystal"></option>
                        <option value="Sarutahiko Crystal"></option>
                        <option value="Ubelluris Crystal"></option>
                        <option value="Titan Crystal"></option>
                        <option value="Gogmagog Crystal"></option>
                        <option value="Ogre Crystal"></option>
                        <option value="Rakshasa Crystal"></option>
                        <option value="Edimmu Crystal"></option>
                        <option value="Cyclops Crystal"></option>
                        <option value="Girimehkala Crystal"></option>
                        <option value="Hecatonchires Crystal"></option>
                        <option value="Hel Crystal"></option>
                        <option value="Chernobog Crystal"></option>
                        <option value="Guede Crystal"></option>
                        <option value="Mot Crystal"></option>
                        <option value="Beiji Weng Crystal"></option>
                        <option value="Setanta Crystal"></option>
                        <option value="Valkyrie Crystal"></option>
                        <option value="Cu Chulainn Crystal"></option>
                        <option value="Frost Ace Crystal"></option>
                        <option value="Kurama-Tengu Crystal"></option>
                        <option value="Hayagriva Crystal"></option>
                        <option value="Kresnik Crystal"></option>
                        <option value="Hanuman Crystal"></option>
                        <option value="Alp Crystal"></option>
                        <option value="Empusa Crystal"></option>
                        <option value="Lilim Crystal"></option>
                        <option value="Fomoriam Crystal"></option>
                        <option value="Incubus Crystal"></option>
                        <option value="Succubus Crystal"></option>
                        <option value="Black Frost Crystal"></option>
                        <option value="Kaiwan Crystal"></option>
                        <option value="Loa Crystal"></option>
                        <option value="Queen Mab Crystal"></option>
                        <option value="Nyx Crystal"></option>
                        <option value="Lilith Crystal"></option>
                        <option value="Pixie Crystal"></option>
                        <option value="Jack Frost Crystal"></option>
                        <option value="Santa Frost Crystal"></option>
                        <option value="Shishimai Frost Crystal"></option>
                        <option value="High Pixie Crystal"></option>
                        <option value="Santa Pyro Crystal"></option>
                        <option value="Pyro Jack Crystal"></option>
                        <option value="Gandharva Crystal"></option>
                        <option value="Kelpie Crystal"></option>
                        <option value="Elf Crystal"></option>
                        <option value="Troll Crystal"></option>
                        <option value="Tam Lin Crystal"></option>
                        <option value="Vivian Crystal"></option>
                        <option value="Oberon Crystal"></option>
                        <option value="Titania Crystal"></option>
                        <option value="Nozuchi Crystal"></option>
                        <option value="Naga Crystal"></option>
                        <option value="Mizuchi Crystal"></option>
                        <option value="Raja Naga Crystal"></option>
                        <option value="Vouivre Crystal"></option>
                        <option value="Vritra Crystal"></option>
                        <option value="Yamata-no-Orochi Crystal"></option>
                        <option value="Yurlungur Crystal"></option>
                        <option value="Makami Crystal"></option>
                        <option value="Kaichi Crystal"></option>
                        <option value="Nandi Crystal"></option>
                        <option value="Narasimha Crystal"></option>
                        <option value="Sphinx Crystal"></option>
                        <option value="Xuan Wu Crystal"></option>
                        <option value="Anubis Crystal"></option>
                        <option value="Barong Crystal"></option>
                        <option value="Shiisa Crystal"></option>
                        <option value="Unicorn Crystal"></option>
                        <option value="Apis Crystal"></option>
                        <option value="Bai Ze Crystal"></option>
                        <option value="Pa Bil Sag Crystal"></option>
                        <option value="Senri Crystal"></option>
                        <option value="Kirin Crystal"></option>
                        <option value="Chimera Crystal"></option>
                        <option value="Sleipnir Crystal"></option>
                        <option value="Bai Hu Crystal"></option>
                        <option value="Cait Sith Crystal"></option>
                        <option value="Cu Sith Crystal"></option>
                        <option value="Inugami Crystal"></option>
                        <option value="Nekomata Crystal"></option>
                        <option value="Orthrus Crystal"></option>
                        <option value="Tan-ki Crystal"></option>
                        <option value="Dawon Crystal"></option>
                        <option value="Cerberus Crystal"></option>
                        <option value="Gryphon Crystal"></option>
                        <option value="Garm Crystal"></option>
                        <option value="Bicorn Crystal"></option>
                        <option value="Gyuki Crystal"></option>
                        <option value="Raiju Crystal"></option>
                        <option value="Nue Crystal"></option>
                        <option value="Mothman Crystal"></option>
                        <option value="Catoblepas Crystal"></option>
                        <option value="Fenrir Crystal"></option>
                        <option value="Erthys Crystal"></option>
                        <option value="Aeros Crystal"></option>
                        <option value="Aquans Crystal"></option>
                        <option value="Flamies Crystal"></option>
                        <option value="Ara Mitama Crystal"></option>
                        <option value="Nigi Mitama Crystal"></option>
                        <option value="Kusi Mitama Crystal"></option>
                        <option value="Saki Mitama Crystal"></option>
                        <option value="Matador Crystal"></option>
                        <option value="Alice Crystal"></option>
                        <option value="David Crystal"></option>
                        <option value="Hell Biker Crystal"></option>
                        <option value="White Rider Crystal"></option>
                        <option value="Daisoujou Crystal"></option>
                        <option value="Red Rider Crystal"></option>
                        <option value="Black Rider Crystal"></option>
                        <option value="Pale Rider Crystal"></option>
                        <option value="Jeanne D'Arc Crystal"></option>
                        <option value="Tokisada Crystal"></option>
                        <option value="Yoshitsune Crystal"></option>
                        <option value="Masakado Crystal"></option>
                        <option value="Trumpeter Crystal"></option>
                        <option value="Mother Harlot Crystal"></option>
                        <option value="Ares Crystal"></option>
                        <option value="Dionysus Crystal"></option>
                        <option value="Indrajit Crystal"></option>
                        <option value="Kartikeya Crystal"></option>
                        <option value="Susano-O Crystal"></option>
                        <option value="Wu Kong Crystal"></option>
                        <option value="Shiva Crystal"></option>
                        <option value="Zouchouten Crystal"></option>
                        <option value="Koumokuten Crystal"></option>
                        <option value="Jikokuten Crystal"></option>
                        <option value="Bishamonten Crystal"></option>
                        <option value="Onamuchi Crystal"></option>
                        <option value="Oyamatsumi Crystal"></option>
                        <option value="Okuninushi Crystal"></option>
                        <option value="Take-Minakata Crystal"></option>
                        <option value="Arahabaki Crystal"></option>
                        <option value="Kikuri-Hime Crystal"></option>
                        <option value="Kushinada-Hime Crystal"></option>
                        <option value="Artemis Crystal"></option>
                        <option value="Parvati Crystal"></option>
                        <option value="Kali Crystal"></option>
                        <option value="Skadi Crystal"></option>
                        <option value="Diana Crystal"></option>
                        <option value="Isis Crystal"></option>
                        <option value="Ishtar Crystal"></option>
                        <option value="King Frost Crystal"></option>
                        <option value="Hecate Crystal"></option>
                        <option value="Moloch Crystal"></option>
                        <option value="Loki Crystal"></option>
                        <option value="Tzitzimitl Crystal"></option>
                        <option value="Surt Crystal"></option>
                        <option value="Chi You Crystal"></option>
                        <option value="Astaroth Crystal"></option>
                        <option value="Lucifuge Crystal"></option>
                        <option value="Alciel Crystal"></option>
                        <option value="Mara(Amorphous) Crystal"></option>
                        <option value="Mara Crystal"></option>
                        <option value="Beelzebub(Fly) Crystal"></option>
                        <option value="Beelzebub(Human) Crystal"></option>
                        <option value="Andras Crystal"></option>
                        <option value="Forneus Crystal"></option>
                        <option value="Eligor Crystal"></option>
                        <option value="Decarabia Crystal"></option>
                        <option value="Berith Crystal"></option>
                        <option value="Orobas Crystal"></option>
                        <option value="Ose Crystal"></option>
                        <option value="Flauros Crystal"></option>
                        <option value="Gomory Crystal"></option>
                        <option value="Abraxas Crystal"></option>
                        <option value="Azazel Crystal"></option>
                        <option value="Coatlicue Crystal"></option>
                        <option value="Ganga Crystal"></option>
                        <option value="Quetzacoatl Crystal"></option>
                        <option value="Qing-Long Crystal"></option>
                        <option value="Ananta Crystal"></option>
                        <option value="Cockatrice Crystal"></option>
                        <option value="Tarasque Crystal"></option>
                        <option value="Bai Suzhen Crystal"></option>
                        <option value="Basilisk Crystal"></option>
                        <option value="Typhon Crystal"></option>
                        <option value="Nidhoggr Crystal"></option>
                        <option value="Kingu Crystal"></option>
                        <option value="Fafnir Crystal"></option>
                        <option value="Vasuki Crystal"></option>
                        <option value="Datsue-Ba Crystal"></option>
                        <option value="Acheri Crystal"></option>
                        <option value="Taraka Crystal"></option>
                        <option value="Gorgon Crystal"></option>
                        <option value="Yomotsu-Shikome Crystal"></option>
                        <option value="Leanan Sidhe Crystal"></option>
                        <option value="Yuki Jyorou Crystal"></option>
                        <option value="Lamia Crystal"></option>
                        <option value="Clotho Crystal"></option>
                        <option value="Arachne Crystal"></option>
                        <option value="Lachesis Crystal"></option>
                        <option value="Yaksni Crystal"></option>
                        <option value="Atropos Crystal"></option>
                        <option value="Dakini Crystal"></option>
                        <option value="Rangda Crystal"></option>
                        <option value="Shikigami Crystal"></option>
                        <option value="Azumi Crystal"></option>
                        <option value="Koppa-Tengu Crystal"></option>
                        <option value="Momunofu Crystal"></option>
                        <option value="Turdak Crystal"></option>
                        <option value="Oni Crystal"></option>
                        <option value="Karasu-Tengu Crystal"></option>
                        <option value="Yomotsu-Ikusa Crystal"></option>
                        <option value="Yaksa Crystal"></option>
                        <option value="Shiki-Ouji Crystal"></option>
                        <option value="Kin-ki Crystal"></option>
                        <option value="Sui-ki Crystal"></option>
                        <option value="Fuu-ki Crystal"></option>
                        <option value="Ongyo-ki Crystal"></option>
                        <option value="Poltergeist Crystal"></option>
                        <option value="Gaki Crystal"></option>
                        <option value="Ghoul Crystal"></option>
                        <option value="Choronzon Crystal"></option>
                        <option value="Yakkha Crystal"></option>
                        <option value="Chatterskull Crystal"></option>
                        <option value="Pisaca Crystal"></option>
                        <option value="Legion Crystal"></option>
                        <option value="Vetala Crystal"></option>
                        <option value="Utai-Gaikotsu Crystal"></option>
                        <option value="Kumbhanda Crystal"></option>
                        <option value="Kudlak Crystal"></option>
                        <option value="Will O'Wisp Crystal"></option>
                        <option value="Slime Crystal"></option>
                        <option value="Mou-Ryou Crystal"></option>
                        <option value="Blob Crystal"></option>
                        <option value="Black Ooze Crystal"></option>
                        <option value="Specter Crystal"></option>
                        <option value="Shadow Crystal"></option>
                        <option value="Phantom Crystal"></option>
                        <option value="Thirty Man's Crystal"></option>
                        <option value="Magatama"></option>
                        <option value="Iron Cage of the Underworld"></option>
                        <option value="Crown of the Seven Hills"></option>
                        <option value="Angel's Music"></option>
                        <option value="Devil's Music"></option>
                        <option value="Memory of a Hero consumed by his dream"></option>
                        <option value="Memory of a Saint who was sacrificed to God"></option>
                        <option value="Abyss"></option>
                        <option value="God's Majesty"></option>
                        <option value="Purgatory Ore"></option>
                    </datalist>
                
                    <datalist id="comptarot">
                        <option value="EXT: Power Device"></option>
                        <option value="EXT: Magical Device"></option>
                        <option value="EXT: Vital Device"></option>
                        <option value="EXT: Mental Device"></option>
                        <option value="EXT: Fast Device"></option>
                        <option value="EXT: Lucky Device"></option>
                        <option value="EXT: Edge Device"></option>
                        <option value="EXT: Lance Device"></option>
                        <option value="EXT: Knucle Device"></option>
                        <option value="EXT: Shot Device"></option>
                        <option value="EXT: Slug Device"></option>
                        <option value="EXT: Through Device"></option>
                        <option value="EXT: Flame Device"></option>
                        <option value="EXT: Freeze Device"></option>
                        <option value="EXT: Thunder Device"></option>
                        <option value="EXT: Aero Device"></option>
                        <option value="EXT: Allmighty Device"></option>
                        <option value="EXT: Holy Device"></option>
                        <option value="EXT: Curse Device"></option>
                        <option value="EXT: Cura Device"></option>
                        <option value="EXT: Spell Device"></option>
                        <option value="EXT: Mind Device"></option>
                        <option value="EXT: Nerve Device"></option>
                    </datalist>
                
                    <datalist id="soulstonehead">
                        <option value="Thoth Crystal"></option>
                        <option value="Mithra Crystal"></option>
                        <option value="Omoikane Crystal"></option>
                        <option value="Amaterasu(Male) Crystal"></option>
                        <option value="Amaterasu(Female) Crystal"></option>
                        <option value="Virtue Crystal"></option>
                        <option value="Suparna Crystal"></option>
                        <option value="Garuda Crystal"></option>
                        <option value="Harpy Crystal"></option>
                        <option value="Aello Crystal"></option>
                        <option value="Hecatonchires Crystal"></option>
                        <option value="Chernobog Crystal"></option>
                        <option value="Alp Crystal"></option>
                        <option value="Black Frost Crystal"></option>
                        <option value="Anubis Crystal"></option>
                        <option value="Bicorn Crystal"></option>
                        <option value="Black Rider Crystal"></option>
                        <option value="Tokisada Crystal"></option>
                        <option value="Dionysus Crystal"></option>
                        <option value="Wu Kong Crystal"></option>
                        <option value="Bishamonten Crystal"></option>
                        <option value="Alciel Crystal"></option>
                        <option value="Forneus Crystal"></option>
                        <option value="Decarabia Crystal"></option>
                        <option value="Ose Crystal"></option>
                        <option value="Qing Long Crystal"></option>
                        <option value="Leanan Sidhe Crystal"></option>
                        <option value="Clotho Crystal"></option>
                        <option value="Ongyo-Ki Crystal"></option>
                        <option value="Crown of the Seven Hills"></option>
                        <option value="Soul Stone: Megrez"></option>
                        <option value="Soul Stone: The Bull"></option>
                        <option value="Soul Stone: Saturn"></option>
                        <option value="Soul Stone: Rude"></option>
                        <option value="Soul Stone: Spirit Mendaciorum"></option>
                        <option value="Soul Stone: Sixth Month"></option>
                        <option value="Soul Stone: Pollux"></option>
                        <option value="Soul Stone: Arcturus"></option>
                    </datalist>
                
                    <datalist id="soulstoneface">
                        <option value="Luvah Crystal"></option>
                        <option value="Baal Crystal"></option>
                        <option value="Omoikane Crystal"></option>
                        <option value="Tsukuyomi Crystal"></option>
                        <option value="Kinnari Crystal"></option>
                        <option value="Virtue Crystal"></option>
                        <option value="Flauros Hallel Crystal"></option>
                        <option value="Suparna Crystal"></option>
                        <option value="Garuda Crystal"></option>
                        <option value="Harpy Crystal"></option>
                        <option value="Aello Crystal"></option>
                        <option value="Alp Crystal"></option>
                        <option value="Black Frost Crystal"></option>
                        <option value="Cerberus Crystal"></option>
                        <option value="Bicorn Crystal"></option>
                        <option value="Catoblepas Crystal"></option>
                        <option value="Beelzebub(Fly) Crystal"></option>
                        <option value="Forneus Crystal"></option>
                        <option value="Decarabia Crystal"></option>
                        <option value="Bai Suzhen Crystal"></option>
                        <option value="Basilisk Crystal"></option>
                        <option value="Clotho Crystal"></option>
                        <option value="Utai-Gaikotsu Crystal"></option>
                        <option value="Iron Cage of the Underworld"></option>
                        <option value="Soul Stone: Megrez"></option>
                        <option value="Soul Stone: The Fish"></option>
                        <option value="Soul Stone: Mars"></option>
                        <option value="Soul Stone: Beta Arietis"></option>
                        <option value="Soul Stone: Maintenance"></option>
                        <option value="Soul Stone: Infideles"></option>
                        <option value="Soul Stone: New Moon"></option>
                        <option value="Soul Stone: Eleventh Month"></option>
                        <option value="Soul Stone: Sirius"></option>
                    </datalist>
                
                    <datalist id="soulstonetop">
                        <option value="Thor Crystal"></option>
                        <option value="Vishnu Crystal"></option>
                        <option value="Hathor Crystal"></option>
                        <option value="Sarasvati Crystal"></option>
                        <option value="Baphomet Crystal"></option>
                        <option value="Dis Crystal"></option>
                        <option value="Throne Crystal"></option>
                        <option value="Celaeno Crystal"></option>
                        <option value="Onmoraki Crystal"></option>
                        <option value="Zhen Crystal"></option>
                        <option value="Ubelluris Crystal"></option>
                        <option value="Rakshasa Crystal"></option>
                        <option value="Hayagriva Crystal"></option>
                        <option value="Empusa Crystal"></option>
                        <option value="Succubus Crystal"></option>
                        <option value="Kaiwan Crystal"></option>
                        <option value="Elf Crystal"></option>
                        <option value="Oberon Crystal"></option>
                        <option value="Nandi Crystal"></option>
                        <option value="Tan-Ki Crystal"></option>
                        <option value="Tao Wu Crystal"></option>
                        <option value="Alice Crystal"></option>
                        <option value="Pale Rider Crystal"></option>
                        <option value="Masakado Crystal"></option>
                        <option value="Shiva Crystal"></option>
                        <option value="Jikokuten Crystal"></option>
                        <option value="Okuninushi Crystal"></option>
                        <option value="Hecate Crystal"></option>
                        <option value="Beelzebub(Human) Crystal"></option>
                        <option value="Ganga Crystal"></option>
                        <option value="Cockatrice Crystal"></option>
                        <option value="Tarasque Crystal"></option>
                        <option value="Typhon Crystal"></option>
                        <option value="Atropos Crystal"></option>
                        <option value="Ghoul Crystal"></option>
                        <option value="Abyss"></option>
                        <option value="Soul Stone: The Ram"></option>
                        <option value="Soul Stone: Neptune"></option>
                        <option value="Soul Stone: Analysis"></option>
                        <option value="Soul Stone: Pseudothei"></option>
                        <option value="Soul Stone: Seventh Month"></option>
                        <option value="Soul Stone: Betelgeuse"></option>
                        <option value="Soul Stone: Deneb"></option>
                    </datalist>
                
                    <datalist id="soulstonebottom">
                        <option value="Ameno-Uzume Crystal"></option>
                        <option value="Scathach Crystal"></option>
                        <option value="Nyarlathotep Crystal"></option>
                        <option value="Dominion Crystal"></option>
                        <option value="Ose Hallel Crystal"></option>
                        <option value="Ocypete Crystal"></option>
                        <option value="Anzu Crystal"></option>
                        <option value="Knocker Crystal"></option>
                        <option value="Titan Crystal"></option>
                        <option value="Fomorian Crystal"></option>
                        <option value="Incubus Crystal"></option>
                        <option value="Gandharva Crystal"></option>
                        <option value="Kelpie Crystal"></option>
                        <option value="Troll Crystal"></option>
                        <option value="Titania Crystal"></option>
                        <option value="Nozuchi Crystal"></option>
                        <option value="Makami Crystal"></option>
                        <option value="Shiisa Crystal"></option>
                        <option value="Unicorn Crystal"></option>
                        <option value="Apis Crystal"></option>
                        <option value="Bai Ze Crystal"></option>
                        <option value="Kirin Crystal"></option>
                        <option value="Sleipnir Crystal"></option>
                        <option value="Matador Crystal"></option>
                        <option value="Koumokuten Crystal"></option>
                        <option value="Onamuchi Crystal"></option>
                        <option value="Parvati Crystal"></option>
                        <option value="Skadi Crystal"></option>
                        <option value="Ishtar Crystal"></option>
                        <option value="Moloch Crystal"></option>
                        <option value="Mara(Amorphous) Crystal"></option>
                        <option value="Mara Crystal"></option>
                        <option value="Andras Crystal"></option>
                        <option value="Eligor Crystal"></option>
                        <option value="Coatlicue Crystal"></option>
                        <option value="Taraka Crystal"></option>
                        <option value="Lachesis Crystal"></option>
                        <option value="Momunofu Crystal"></option>
                        <option value="Turdak Crystal"></option>
                        <option value="Poltergeist Crystal"></option>
                        <option value="Black Ooze Crystal"></option>
                        <option value="Specter Crystal"></option>
                        <option value="Thirsty's Man Crystal"></option>
                        <option value="Soul Stone: The Lion"></option>
                        <option value="Soul Stone: Venus"></option>
                        <option value="Soul Stone: Tact"></option>
                        <option value="Soul Stone: Praestigiatores"></option>
                        <option value="Soul Stone: Tenth Month"></option>
                        <option value="Soul Stone: Procyon"></option>
                    </datalist>

                    <datalist id="soulstoneshoes">
                        <option value="Apsaras Crystal"></option>
                        <option value="Efreet Crystal"></option>
                        <option value="Gogmagoc Crystal"></option>
                        <option value="High Pixie Crystal"></option>
                        <option value="Nozuchi Crystal"></option>
                        <option value="Xuan Wu Crystal"></option>
                        <option value="Pa Bil Sag Crystal"></option>
                        <option value="Cait Sith Crystal"></option>
                        <option value="Cu Sith Crystal"></option>
                        <option value="Dawon Crystal"></option>
                        <option value="Hell Biker Crystal"></option>
                        <option value="Zouchouten Crystal"></option>
                        <option value="Oyamatsumi Crystal"></option>
                        <option value="Yuki Jyorou Crystal"></option>
                        <option value="Azumi Crystal"></option>
                        <option value="Sui-Ki Crystal"></option>
                        <option value="Phantom Crystal"></option>
                        <option value="Purgatory Ore"></option>
                        <option value="Soul Stone: Alkaid"></option>
                        <option value="Soul Stone: The Archer"></option>
                        <option value="Soul Stone: Epsilon Tauri"></option>
                        <option value="Soul Stone: Sympathy"></option>
                        <option value="Soul Stone: Tentatores Maligenii"></option>
                        <option value="Soul Stone: Crescent Moon"></option>
                        <option value="Soul Stone: Third Month"></option>
                        <option value="Soul Stone: Capella"></option>
                    </datalist>
                
                    <datalist id="soulstonegloves">
                        <option value="Alilat Crystal"></option>
                        <option value="Indra Crystal"></option>
                        <option value="Atavaka Crystal"></option>
                        <option value="Pallas Athena Crystal"></option>
                        <option value="Tajikarao Crystal"></option>
                        <option value="Gurr Crystal"></option>
                        <option value="Ogre Crystal"></option>
                        <option value="Edimmu Crystal"></option>
                        <option value="Frost Ace Crystal"></option>
                        <option value="Jack Frost Crystal"></option>
                        <option value="Naga Crystal"></option>
                        <option value="Raja Naga Crystal"></option>
                        <option value="Narasimha Crystal"></option>
                        <option value="Bai Hu Crystal"></option>
                        <option value="Nekomata Crystal"></option>
                        <option value="Nigi Mitama Crystal"></option>
                        <option value="White Rider Crystal"></option>
                        <option value="Mother Harlot Crystal"></option>
                        <option value="Kali Crystal"></option>
                        <option value="Datsue-Ba Crystal"></option>
                        <option value="Gorgon Crystal"></option>
                        <option value="Arachne Crystal"></option>
                        <option value="Yaksni Crystal"></option>
                        <option value="Dakini Crystal"></option>
                        <option value="Gaki Crystal"></option>
                        <option value="Soul Stone: Dubhe"></option>
                        <option value="Soul Stone: The Goat"></option>
                        <option value="Soul Stone: Moon"></option>
                        <option value="Soul Stone: Zeta Andromedae"></option>
                        <option value="Soul Stone: Keenness"></option>
                        <option value="Soul Stone: Malefici"></option>
                        <option value="Soul Stone: Ninth Month"></option>
                        <option value="Soul Stone: Rigel"></option>
                        <option value="Soul Stone: Altair"></option>
                    </datalist>
                
                    <datalist id="soulstonering">
                        <option value="Horus Crystal"></option>
                        <option value="Take-Mikazuchi Crystal"></option>
                        <option value="Isora Crystal"></option>
                        <option value="Ganesha Crystal"></option>
                        <option value="Uriel Crystal"></option>
                        <option value="Gabriel Crystal"></option>
                        <option value="Girimehkala Crystal"></option>
                        <option value="Valkyrie Crystal"></option>
                        <option value="Hanuman Crystal"></option>
                        <option value="Pixie Crystal"></option>
                        <option value="Santa Frost Crystal"></option>
                        <option value="Shishimai Frost Crystal"></option>
                        <option value="Santa Pyro Crystal"></option>
                        <option value="Tam Lin Crystal"></option>
                        <option value="Yurlungur Crystal"></option>
                        <option value="Barong Crystal"></option>
                        <option value="Saki Mitama Crystal"></option>
                        <option value="Kikuri-Hime Crystal"></option>
                        <option value="Kushinada-Hime Crystal"></option>
                        <option value="Ananta Crystal"></option>
                        <option value="Fafnir Crystal"></option>
                        <option value="Lamia Crystal"></option>
                        <option value="Shiki-Ouji Crystal"></option>
                        <option value="Fuu-Ki Crystal"></option>
                        <option value="Yakkha Crystal"></option>
                        <option value="Slime Crystal"></option>
                        <option value="Mou-Ryou Crystal"></option>
                        <option value="Magatama"></option>
                        <option value="Soul Stone: The Serpent Holder"></option>
                        <option value="Soul Stone: Delta Orionis"></option>
                        <option value="Soul Stone: Originality"></option>
                        <option value="Soul Stone: Transgression"></option>
                        <option value="Soul Stone: Fourth Month"></option>
                        <option value="Soul Stone: Vega"></option>
                        <option value="Soul Stone:Algenib"></option>
                        <option value="Soul Stone: Spica"></option>
                    </datalist>
                
                    <datalist id="soulstoneearring">
                        <option value="Norn Crystal"></option>
                        <option value="Isora Crystal"></option>
                        <option value="Rafael Crystal"></option>
                        <option value="Valkyrie Crystal"></option>
                        <option value="Pixie Crystal"></option>
                        <option value="Santa Frost Crystal"></option>
                        <option value="Shishimai Frost Crystal"></option>
                        <option value="Santa Pyro Crystal"></option>
                        <option value="Gryphon Crystal"></option>
                        <option value="Raiju Crystal"></option>
                        <option value="Kusi Mitama Crystal"></option>
                        <option value="Take-Minakata Crystal"></option>
                        <option value="Kikuri-Hime Crystal"></option>
                        <option value="Kushinada-Hime Crystal"></option>
                        <option value="Gomory Crystal"></option>
                        <option value="Lamia Crystal"></option>
                        <option value="Rangda Crystal"></option>
                        <option value="Yaksa Crystal"></option>
                        <option value="Yakkha Crystal"></option>
                        <option value="Slime Crystal"></option>
                        <option value="Mou-Ryou Crystal"></option>
                        <option value="Soul Stone: The Scorpion"></option>
                        <option value="Soul Stone: Regulus"></option>
                        <option value="Soul Stone: Meissa"></option>
                        <option value="Soul Stone: Ego"></option>
                        <option value="Soul Stone: White Water"></option>
                        <option value="Soul Stone: Green Wood"></option>
                        <option value="Soul Stone: Copper"></option>
                        <option value="Soul Stone: Criminatores"></option>
                        <option value="Soul Stone: Twelfth Month"></option>
                        <option value="Soul Stone: Alpheratz"></option>
                        <option value="Soul Stone: Cor Caroli"></option>
                    </datalist>
                
                    <datalist id="soulstoneneck">
                        <option value="Urthona Crystal"></option>
                        <option value="Freya Crystal"></option>
                        <option value="Anat Crystal"></option>
                        <option value="Tao Tie Crystal"></option>
                        <option value="Metatron Crystal"></option>
                        <option value="Angel Crystal"></option>
                        <option value="Feng Huang Crystal"></option>
                        <option value="Phoenix Crystal"></option>
                        <option value="Kresnik Crystal"></option>
                        <option value="Kaichi Crystal"></option>
                        <option value="Senri Crystal"></option>
                        <option value="Inugami Crystal"></option>
                        <option value="Orthrus Crystal"></option>
                        <option value="Garm Crystal"></option>
                        <option value="Nue Crystal"></option>
                        <option value="Fenrir Crystal"></option>
                        <option value="Susano-O Crystal"></option>
                        <option value="Azazel Crystal"></option>
                        <option value="Acheri Crystal"></option>
                        <option value="Will O'Wisp Crystal"></option>
                        <option value="Soul Stone: Merak"></option>
                        <option value="Soul Stone: The Virgin"></option>
                        <option value="Soul Stone: Uranus"></option>
                        <option value="Soul Stone: Fomalhaut"></option>
                        <option value="Soul Stone: Electra"></option>
                        <option value="Soul Stone: Deep Realization"></option>
                        <option value="Soul Stone: Aereae Potestates"></option>
                        <option value="Soul Stone: Eighth Month"></option>
                        <option value="Soul Stone: Denebola"></option>
                    </datalist>
                
                    <datalist id="soulstonetalisman">
                        <option value="Tharmas Crystal"></option>
                        <option value="Black Maria Crystal"></option>
                        <option value="Lakshmi Crystal"></option>
                        <option value="Mishaguji-Sama Crystal"></option>
                        <option value="Mada Crystal"></option>
                        <option value="Kodama Crystal"></option>
                        <option value="Hua Po Crystal"></option>
                        <option value="Lilim Crystal"></option>
                        <option value="Loa Crystal"></option>
                        <option value="Lilith Crystal"></option>
                        <option value="Sphinx Crystal"></option>
                        <option value="Mothman Crystal"></option>
                        <option value="Daisoujou Crystal"></option>
                        <option value="Artemis Crystal"></option>
                        <option value="Yomotsu-Shikome Crystal"></option>
                        <option value="Yomotsu-Ikusa Crystal"></option>
                        <option value="Soul Stone: Phecda"></option>
                        <option value="Soul Stone: The Crab"></option>
                        <option value="Soul Stone: Pluto"></option>
                        <option value="Soul Stone: Antares"></option>
                        <option value="Soul Stone: Adventure"></option>
                        <option value="Soul Stone: Black Soil"></option>
                        <option value="Soul Stone: Yellow Soil"></option>
                        <option value="Soul Stone: White Soil"></option>
                        <option value="Soul Stone: Ultores Scelorum"></option>
                        <option value="Soul Stone: Second Month"></option>
                        <option value="Soul Stone: Markab"></option>
                    </datalist>
                
                    <datalist id="soulstoneextra">
                        <option value="Urizen Crystal"></option>
                        <option value="Pazuzu Crystal"></option>
                        <option value="Isora Crystal"></option>
                        <option value="Dis Crystal"></option>
                        <option value="Valkyrie Crystal"></option>
                        <option value="Queen Mab Crystal"></option>
                        <option value="Pixie Crystal"></option>
                        <option value="Santa Frost Crystal"></option>
                        <option value="Shishimai Frost Crystal"></option>
                        <option value="Santa Pyro Crystal"></option>
                        <option value="Tam Lin Crystal"></option>
                        <option value="Vritra Crystal"></option>
                        <option value="Yoshitsune Crystal"></option>
                        <option value="Kikuri-Hime Crystal"></option>
                        <option value="Kushinada-Hime Crystal"></option>
                        <option value="Diana Crystal"></option>
                        <option value="Vasuki Crystal"></option>
                        <option value="Lamia Crystal"></option>
                        <option value="Yakkha Crystal"></option>
                        <option value="Kumbhanda Crystal"></option>
                        <option value="Kudlak Crystal"></option>
                        <option value="Slime Crystal"></option>
                        <option value="Mou-Ryou Crystal"></option>
                        <option value="Soul Stone: The Water Bearer"></option>
                        <option value="Soul Stone: Mercury"></option>
                        <option value="Soul Stone: Passion"></option>
                        <option value="Soul Stone: Blue Wood"></option>
                        <option value="Soul Stone: Platinum"></option>
                        <option value="Soul Stone: Violet Flame"></option>
                        <option value="Soul Stone: Apostatae"></option>
                        <option value="Soul Stone: First Month"></option>
                        <option value="Soul Stone: Scheat"></option>
                    </datalist>
                
                    <datalist id="soulstoneback">
                        <option value="Albion Crystal"></option>
                        <option value="Sati Crystal"></option>
                        <option value="Samael Crystal"></option>
                        <option value="Jinn Crystal"></option>
                        <option value="Seraph Crystal"></option>
                        <option value="Zhu Que Crystal"></option>
                        <option value="Morrigan Crystal"></option>
                        <option value="Moh Shuvuu Crystal"></option>
                        <option value="Hresvelgr Crystal"></option>
                        <option value="Yamata-no-Orochi Crystal"></option>
                        <option value="Ara Mitama Crystal"></option>
                        <option value="Red Rider Crystal"></option>
                        <option value="Trumpeter Crystal"></option>
                        <option value="Indrajit Crystal"></option>
                        <option value="Kartikeya Crystal"></option>
                        <option value="King Frost Crystal"></option>
                        <option value="Astaroth Crystal"></option>
                        <option value="Orobas Crystal"></option>
                        <option value="Quetzacoatl Crystal"></option>
                        <option value="Shikigami Crystal"></option>
                        <option value="Kin-ki Crystal"></option>
                        <option value="Pisaca Crystal"></option>
                        <option value="Soul Stone: Alioth"></option>
                        <option value="Soul Stone: The Twins"></option>
                        <option value="Soul Stone: Jupiter"></option>
                        <option value="Soul Stone: 35 Arietis"></option>
                        <option value="Soul Stone: Confidence"></option>
                        <option value="Soul Stone: Vasa Iniquitatis"></option>
                        <option value="Soul Stone: Full Moon"></option>
                        <option value="Soul Stone: Fifth Month"></option>
                        <option value="Soul Stone: Aldebaran"></option>
                    </datalist>
                
                    <datalist id="soulstonecomp">
                        <option value="Fortuna Crystal"></option>
                        <option value="David Crystal"></option>
                        <option value="Lucifuge Crystal"></option>
                        <option value="Abraxas Crystal"></option>
                    </datalist>
                
                    <datalist id="soulstoneweapon">
                        <option value="Odin Crystal"></option>
                        <option value="Seth Crystal"></option>
                        <option value="Hino-Kagutsuchi Crystal"></option>
                        <option value="Onkot Crystal"></option>
                        <option value="Purski Crystal"></option>
                        <option value="Michael Crystal"></option>
                        <option value="Archangel Crystal"></option>
                        <option value="Principality Crystal"></option>
                        <option value="Power Crystal"></option>
                        <option value="Jatayu Crystal"></option>
                        <option value="Yatagarasu Crystal"></option>
                        <option value="Macha Crystal"></option>
                        <option value="Badb Catha Crystal"></option>
                        <option value="Furiae Crystal"></option>
                        <option value="Camazotz Crystal"></option>
                        <option value="Sudama Crystal"></option>
                        <option value="Bucca-Boo Crystal"></option>
                        <option value="Dwarf Crystal"></option>
                        <option value="Sarutahiko Crystal"></option>
                        <option value="Cyclops Crystal"></option>
                        <option value="Guede Crystal"></option>
                        <option value="Mot Crystal"></option>
                        <option value="Beiji Weng Crystal"></option>
                        <option value="Setanta Crystal"></option>
                        <option value="Cu Chulainn Crystal"></option>
                        <option value="Kurama-Tengu Crystal"></option>
                        <option value="Nyx Crystal"></option>
                        <option value="Pyro Jack Crystal"></option>
                        <option value="Vivian Crystal"></option>
                        <option value="Vouivre Crystal"></option>
                        <option value="Chimera Crystal"></option>
                        <option value="Gyuki Crystal"></option>
                        <option value="Erthys Crystal"></option>
                        <option value="Aeros Crystal"></option>
                        <option value="Aquans Crystal"></option>
                        <option value="Flamies Crystal"></option>
                        <option value="Jeanne D'Arc Crystal"></option>
                        <option value="Ares Crystal"></option>
                        <option value="Arahabaki Crystal"></option>
                        <option value="Isis Crystal"></option>
                        <option value="Loki Crystal"></option>
                        <option value="Tzitzimitl Crystal"></option>
                        <option value="Surt Crystal"></option>
                        <option value="Chi You Crystal"></option>
                        <option value="Berith Crystal"></option>
                        <option value="Flauros Crystal"></option>
                        <option value="Nidhoggr Crystal"></option>
                        <option value="Kingu Crystal"></option>
                        <option value="Koppa-Tengu Crystal"></option>
                        <option value="Oni Crystal"></option>
                        <option value="Karasu-Tengu Crystal"></option>
                        <option value="Choronzon Crystal"></option>
                        <option value="Chatterskull Crystal"></option>
                        <option value="Legion Crystal"></option>
                        <option value="Vetala Crystal"></option>
                        <option value="Blob Crystal"></option>
                        <option value="Shadow Crystal"></option>
                        <option value="Angel's Music"></option>
                        <option value="Devil's Music"></option>
                        <option value="Memory of a Hero consumed by his dream"></option>
                        <option value="Memory of a Saint who was sacrificed to God"></option>
                        <option value="Dying Light I"></option>
                        <option value="Dying Light II"></option>
                        <option value="Dying Light III"></option>
                        <option value="Dying Light IV"></option>
                        <option value="Dying Light V"></option>
                        <option value="Dying Light VI"></option>
                        <option value="Dying Light VII"></option>
                        <option value="Dying Light VIII"></option>
                        <option value="Dying Light IX"></option>
                        <option value="Soul Stone: Mizar"></option>
                        <option value="Soul Stone: The Scales"></option>
                        <option value="Soul Stone: Earth"></option>
                        <option value="Soul Stone: Furiae"></option>
                    </datalist>
                
                    <datalist id="weaponlist">
                        <option value="Small Karasuma"></option>
                        <option value="Masakado's Katana"></option>
                        <option value="Karaitenjin-Ho"></option>
                    </datalist>
                
                    <datalist id="s1headmale">
                        <option value="Hachigame of Japanese Patriotism"></option>
                        <option value="Suv"></option>
                    </datalist>
                
                     <datalist id="s1headfemale">
                        <option value="Chapeu"></option>
                        <option value="Brinco"></option>
                    </datalist>
                
                    <datalist id="facelist">
                        <option value="ccc"></option>
                        <option value="ddd"></option>
                    </datalist>
                
                    <datalist id="toplistmale">
                        <option value="aaa"></option>
                        <option value="bbb"></option>
                    </datalist>
                
                    <datalist id="toplistfemale"></datalist>
            </form>
        </div> 
        
        <div id="share">
            <input type="text" name="link" id="link">
        </div>

        <div id="char_stats">

            <details>
                <summary>General Stats</summary>
                    <label for="str">Strength</label><input type="text" id="str" name="str" readonly>
                    <label for="mag">Magic</label><input type="text" id="mag" name="mag" readonly>
                    <label for="vit">Vitality</label><input type="text" id="vit" name="vit" readonly>
                    <label for="int">Intelligence</label><input type="text" id="int" name="int" readonly>
                    <label for="spd">Speed</label><input type="text" id="spd" name="spd" readonly>
                    <label for="luc">Luck</label><input type="text" id="luc" name="luc" readonly>
                    <label for="clsrng">Close Range</label><input type="text" id="clsrng" name="clsrng" readonly>
                    <label for="lngrng">Long Range</label><input type="text" id="lngrng" name="lngrng" readonly>
                    <label for="spell">Spell</label><input type="text" id="spell" name="spell" readonly>
                    <label for="support">Support</label><input type="text" id="support" name="support" readonly>
                    <label for="phydef">Physical Defense</label><input type="text" id="phydef" name="phydef" readonly>
                    <label for="magdef">Magical Defense</label><input type="text" id="magdef" name="magdef" readonly>
                    <label for="maxhp">MAX HP</label><input type="text" id="maxhp" name="maxhp" readonly>
                    <label for="maxmp">MAX MP</label><input type="text" id="maxmp" name="maxmp" readonly>
                    <label for="hpregen">HP Regeneration +%</label><input type="text" id="hpregen" name="hpregen" readonly>
                    <label for="mpregen">MP Regeneration +%</label><input type="text" id="mpregen" name="mpregen" readonly>
                    <label for="hpregenflat">Flat HP Regeneration</label><input type="text" id="hpregenflat" name="hpregenflat" readonly>
                    <label for="mpregenflat">Flat MP Regeneration</label><input type="text" id="mpregenflat" name="mpregenflat" readonly>
                    <label for="hpcost">HP Cost</label><input type="text" id="hpcost" name="hpcost" readonly>
                    <label for="mpcost">MP Cost</label><input type="text" id="mpcost" name="mpcost" readonly>
            </details>

            <hr>
            
            <details>
                <summary>General Damage effects</summary>
                    <label for="cdr">Cooldown Reduction</label><input type="text" id="cdr" name="cdr" readonly>
                    <label for="incantred">Incantation Reduction</label><input type="text" id="incantred" name="incantred" readonly>
                    <label for="clsrngdmg">Close Range Damage</label><input type="text" id="clsrngdmg" name="clsrngdmg" readonly>
                    <label for="lngrngdmg">Long Range Damage</label><input type="text" id="lngrngdmg" name="lngrngdmg" readonly>
                    <label for="spelldmg">Spell Damage</label><input type="text" id="spelldmg" name="spelldmg" readonly>
                    <label for="clsrngdmgreceived">Close Range Damage Received</label><input type="text" id="clsrngdmgreceived" name="clsrngdmgreceived" readonly>
                    <label for="lngrngdmgreceived">Long Range Damage Received</label><input type="text" id="lngrngdmgreceived" name="lngrngdmgreceived" readonly>
                    <label for="spelldmgreceived">Spell Damage Received</label><input type="text" id="spelldmgreceived" name="spelldmgreceived" readonly>
                    <label for="lbchance">Limit Break Chance</label><input type="text" id="lbchance" name="lbchance" readonly>
                    <label for="lbpower">Limit Break Power</label><input type="text" id="lbpower" name="lbpower" readonly>
                    <label for="tachance">Technical Attack Chance</label><input type="text" id="tachance" name="tachance" readonly>
                    <label for="tachance">Technical Attack Power</label><input type="text" id="tapower" name="tapower" readonly>
                    <label for="pursuitchance">Pursuit Chance</label><input type="text" id="pursuitchance" name="pursuitchance" readonly>
                    <label for="pursuitpower">Pursuit Power</label><input type="text" id="pursuitpower" name="pursuitpower" readonly>
                    <label for="critical">Critical</label><input type="text" id="critical" name="critical" readonly>
                    <label for="criticaldef">Critical Defense</label><input type="text" id="criticaldef" name="criticaldef" readonly>
                    <label for="fcc">Final Critical Correction</label><input type="text" id="fcc" name="fcc" readonly>
                    <label for="lbcap">Limit Break Cap</label><input type="text" id="lbcap" name="lbc" readonly>
                    <label for="statuschange">Status Changing skills</label><input type="text" id="statuschange" name="statuschange" readonly>
                    <label for="instakill">Instant Kill Success Rate</label><input type="text" id="instakill" name="instakill" readonly>
            </details>   
            
            <hr>
               
            <details>
                <summary>Damage Boosts and Caps</summary>
                    <label for="slashboost">Slash Boost</label><input type="text" id="slashboost" name="slashboost" readonly>
                    <label for="chargeboost">Charge Boost</label><input type="text" id="chargeboost" name="chargeboost" readonly>
                    <label for="bluntboost">Blunt Boost</label><input type="text" id="bluntboost" name="bluntboost" readonly>
                    <label for="handgunboost">Handgun Boost</label><input type="text" id="handgunboost" name="handgunboost" readonly>
                    <label for="spreadboost">Spread Boost</label><input type="text" id="spreadboost" name="spreadboost" readonly>
                    <label for="penetrateboost">Penetrate Boost</label><input type="text" id="penetrateboost" name="penetrateboost" readonly>
                    <label for="fireboost">Fire Boost</label><input type="text" id="fireboost" name="fireboost" readonly>
                    <label for="iceboost">Ice Boost</label><input type="text" id="iceboost" name="iceboost" readonly>
                    <label for="elecboost">Elec Boost</label><input type="text" id="elecboost" name="elecboost" readonly>
                    <label for="forceboost">Force Boost</label><input type="text" id="forceboost" name="forceboost" readonly>
                    <label for="expelboost">Expel Boost</label><input type="text" id="expelboost" name="expelboost" readonly>
                    <label for="deathboost">Death Boost</label><input type="text" id="deathboost" name="deathboost" readonly>
                    <label for="magicboost">Magic Boost</label><input type="text" id="magicboost" name="magicboost" readonly>
                    <label for="mindboost" >Mind Boost</label><input type="text" id="mindboost" name="mindboost" readonly>
                    <label for="nerveboost">Nerve Boost</label><input type="text" id="nerveboost" name="nerveboost" readonly>
                    <label for="almightyboost">Almighty Boost</label><input type="text" id="almightyboost" name="almightyboost" readonly>
                    <label for="curaboost">Curative Boost</label><input type="text" id="curaboost" name="curaboost" readonly>
                    <label for="slashcap">Slash Cap</label><input type="text" id="slashcap" name="slashcap" readonly>
                    <label for="chargecap">Charge Cap</label><input type="text" id="chargecap" name="chargecap" readonly>
                    <label for="bluntcap">Blunt Cap</label><input type="text" id="bluntcap" name="bluntcap" readonly>
                    <label for="handguncap">Handgun Cap</label><input type="text" id="handguncap" name="handguncap" readonly>
                    <label for="spreadcap">Spread Cap</label><input type="text" id="spreadcap" name="spreadcap" readonly>
                    <label for="penetratecap">Penetrate Cap</label><input type="text" id="penetratecap" name="penetratecap" readonly>
                    <label for="firecap">Fire Boost</label><input type="text" id="firecap" name="firecap" readonly>
                    <label for="icecap">Ice Cap</label><input type="text" id="icecap" name="icecap" readonly>
                    <label for="eleccap">Elec Cap</label><input type="text" id="eleccap" name="eleccap" readonly>
                    <label for="forcecap">Force Cap</label><input type="text" id="forcecap" name="forcecap" readonly>
                    <label for="mindcap">Mind Cap</label><input type="text" id="mindcap" name="mindcap" readonly>
                    <label for="nervecap">Nerve Cap</label><input type="text" id="nervecap" name="nervecap" readonly>
                    <label for="almightycap">Almighty Cap</label><input type="text" id="almightycap" name="almightycap" readonly>
                    <label for="attackboost">Attack Boost</label><input type="text" id="attackboost" name="attackboost" readonly>
                    <label for="rushboost">Rush Boost</label><input type="text" id="rushboost" name="rushboost" readonly>
                    <label for="spinboost">Spin Boost</label><input type="text" id="spinboost" name="spinboost" readonly>
                    <label for="shotboost">Shot Boost</label><input type="text" id="shotboost" name="shotboost" readonly>
                    <label for="rapidboost">Rapid Boost</label><input type="text" id="rapidboost" name="rapidboost" readonly>
                    <label for="counterboost">Counter Boost</label><input type="text" id="counterboost" name="counterboost" readonly>
                    <label for="bindboost">Bind Boost</label><input type="text" id="bindboost" name="bindboost" readonly>
                    <label for="charmboost">Charm Boost</label><input type="text" id="charmboost" name="charmboost" readonly>
                    <label for="muddleboost">Muddle Boost</label><input type="text" id="muddleboost" name="muddleboost" readonly>
                    <label for="stoneboost">Stone Boost</label><input type="text" id="stoneboost" name="stoneboost" readonly>
                    <label for="poisonboost">Poison Boost</label><input type="text" id="poisonboost" name="poisonboost" readonly>
                    <label for="paralyzeboost">Paralyze Boost</label><input type="text" id="paralyzeboost" name="paralyzeboost" readonly>
                    <label for="stunboost">Stun Boost</label>"<input type="text" id="stunboost" name="stunboost" readonly>
            </details>

            <hr>
            
            <details>
                <summary>Races</summary>
                    <label for="racedmgelemental">Damage against Elemental race</label><input type="text" id="racedmgelemental" name="racedmgelemental" readonly>
                    <label for="racedmgfoul">Damage against Foul race</label><input type="text" id="racedmgfoul" name="racedmgfoul" readonly>
                    <label for="racedmgevildragon">Damage against Evil Dragon race</label><input type="text" id="racedmgevildragon" name="racedmgevildragon" readonly>
                    <label for="racedefevilspirit">Damage received from Evil Spirit race</label><input type="text" id="racedefevilspirit" name="racedefevilspirit" readonly>
                    <label for="racedefevildemon">Damage received from Evil Demon race</label><input type="text" id="racedefevildemon" name="racedefevildemon" readonly>
                    <label for="racedeffoul">Damage received from Foul race</label><input type="text" id="racedeffoul" name="racedeffoul" readonly>
                    <label for="racedefgod">Damage received from God race</label><input type="text" id="racedefgod" name="racedefgod" readonly>
                    <label for="racedefdragon">Damage received from Dragon race</label><input type="text" id="racedefdragon" name="racedefdragon" readonly>
            </details>

            <hr>
            
            <details>
                <summary>Resistances</summary>
                    <label for="slashresist">Slash Resistance</label><input type="text" id="slashresist" name="slashresist" readonly>
                    <label for="chargeresist">Charge Resistance</label><input type="text" id="chargeresist" name="chargeresist" readonly>
                    <label for="bluntresist">Blunt Resistace</label><input type="text" id="bluntresist" name="bluntresist" readonly>
                    <label for="handgunresist">Handgun Resistance</label><input type="text" id="handgunresist" name="handgunresist" readonly>
                    <label for="penetrateresist">Penetrate Resistance</label><input type="text" id="penetrateresist" name="penetrateresist" readonly>
                    <label for="spreadresist">Spread Resistance</label><input type="text" id="spreadresist" name="spreadresist" readonly>
                    <label for="fireresist">Fire Resistance</label><input type="text" id="fireresist" name="fireresist" readonly>
                    <label for="iceresist">Ice Resistance</label><input type="text" id="iceresist" name="iceresist" readonly>
                    <label for="elecresist">Elec Resistance</label><input type="text" id="elecresist" name="elecresist" readonly>
                    <label for="forceresist">Force Resistance</label><input type="text" id="forceresist" name="forceresist" readonly>
                    <label for="expelresist">Expel Resistance</label><input type="text" id="expelresist" name="expelresist" readonly>
                    <label for="deathresist">Death Resistance</label><input type="text" id="deathresist" name="deathresist" readonly>
                    <label for="magicresist">Magic Resistance</label><input type="text" id="magicresist" name="magicresist" readonly>
                    <label for="mindresist">Mind Resistance</label><input type="text" id="mindresist" name="mindresist" readonly>
                    <label for="nerveresist">Nerve Resistance</label><input type="text" id="nerveresist" name="nerveresist" readonly>

                    <label for="voidslash">Void Slash</label><input type="text" id="voidslash" name="voidslash" readonly>
                    <label for="voidcharge">Void Charge</label><input type="text" id="voidcharge" name="voidcharge" readonly>
                    <label for="voidblunt">Void Blunt</label><input type="text" id="voidblunt" name="voidblunt" readonly>
                    <label for="voidhandgun">Void Handgun</label><input type="text" id="voidhandgun" name="voidhandgun" readonly>
                    <label for="voidpenetrate">Void Penetrate</label><input type="text" id="voidpenetrate" name="voidpenetrate" readonly>
                    <label for="voidspread">Void Spread</label><input type="text" id="voidspread" name="voidspread" readonly>
                    <label for="voidfire">Void Fire</label><input type="text" id="voidfire" name="voidfire" readonly>
                    <label for="voidice">Void Ice</label><input type="text" id="voidice" name="voidice" readonly>
                    <label for="voidelec">Void Electric</label><input type="text" id="voidelec" name="voidelec" readonly>
                    <label for="voidforce">Void Force</label><input type="text" id="voidforce" name="voidforce" readonly>
                    <label for="voidexpel">Void Expel</label><input type="text" id="voidexpel" name="voidexpel" readonly>
                    <label for="voiddeath">Void Death</label><input type="text" id="voiddeath" name="voiddeath" readonly>
                    <label for="voidmagic">Void Magic</label><input type="text" id="voidmagic" name="voidmagic" readonly>
                    <label for="voidmind">Void Mind</label><input type="text" id="voidmind" name="voidmind" readonly>
                    <label for="voidnerve">Void Nerve</label><input type="text" id="voidnerve" name="voidnerve" readonly>

                    <label for="slashreflect">Reflect Slash</label><input type="text" id="slashreflect" name="slashreflect" readonly>
                    <label for="chargereflect">Reflect Charge</label><input type="text" id="chargereflect" name="chargereflect" readonly>
                    <label for="bluntreflect">Reflect Blunt</label><input type="text" id="bluntreflect" name="bluntreflect" readonly>
                    <label for="handgunreflect">Reflect Handgun</label><input type="text" id="handgunreflect" name="handgunreflect" readonly>
                    <label for="penetratereflect">Reflect Penetrate</label><input type="text" id="penetratereflect" name="penetratereflect" readonly>
                    <label for="spreadreflect">Reflect Spread</label><input type="text" id="spreadreflect" name="spreadreflect" readonly>
                    <label for="firereflect">Reflect Fire</label><input type="text" id="firereflect" name="firereflect" readonly>
                    <label for="icereflect">Reflect Ice</label><input type="text" id="icereflect" name="icereflect" readonly>
                    <label for="elecreflect">Reflect Electric</label><input type="text" id="elecreflect" name="elecreflect" readonly>
                    <label for="forcereflect">Reflect Force</label><input type="text" id="forcereflect" name="forcereflect" readonly>
                    <label for="expelreflect">Reflect Expel</label><input type="text" id="expelreflect" name="expelreflect" readonly>
                    <label for="deathreflect">Reflect Death</label><input type="text" id="deathreflect" name="deathreflect" readonly>
                    <label for="magicreflect">Reflect Magic</label><input type="text" id="magicreflect" name="magicreflect" readonly>
                    <label for="mindreflect">Reflect Mind</label><input type="text" id="mindreflect" name="mindreflect" readonly>
                    <label for="nervereflect">Reflect Nerve</label><input type="text" id="nervereflect" name="nervereflect" readonly>
                    <label for="elecabsorb">Absorb Electricity</label><input type="text" id="elecabsorb" name="elecabsorb" readonly>
                    <label for="forceabsorb">Absorb Force</label><input type="text" id="forceabsorb" name="forceabsorb" readonly>
            </details>

            <hr>
            
            <details>
                <summary>Resources</summary>
                    <label for="macca">Macca earned</label><input type="text" id="macca" name="macca" readonly>
                    <label for="magnetite">Magnetite earned</label><input type="text" id="magnetite" name="magnetite" readonly>
                    <label for="experience">Experience Points earned</label><input type="text" id="experience" name="experience" readonly>
                    <label for="expertise">Expertise Points earned</label><input type="text" id="expertise" name="expertise" readonly>
                    <label for="spearned">Soul Points earned</label><input type="text" id="spearned" name="spearned" readonly>
                    <label for="digiearned">Digitalize Points earned</label><input type="text" id="digiearned" name="digiearned" readonly>
                    <label for="bethelearned">Bethel Points earned</label><input type="text" id="bethelearned" name="bethelearned" readonly>
            </details>
            
            <hr>
            
            <details>
                <summary>Status Ailment</summary>
                    <label for="stonenull">Stone</label><input type="checkbox" id="stonenull" name="stonenull" value="stone" disabled>
                    <label for="muddlenull">Muddle</label><input type="checkbox" id="muddlenull" name="muddlenull" value="muddle" disabled>
                    <label for="mutenull">Mute</label><input type="checkbox" id="mutenull" name="mutenull" value="mute" disabled>
                    <label for="confusenull">Confuse</label><input type="checkbox" id="confusenull" name="confusenull" value="confuse" disabled>
                    <label for="charmnull">Charm</label><input type="checkbox" id="charmnull" name="charmnull" value="charm" disabled>
                    <label for="sleepnull">Sleep</label><input type="checkbox" id="sleepnull" name="sleepnull" value="sleep" disabled>
                    <label for="ragenull">Rage</label><input type="checkbox" id="ragenull" name="ragenull" value="rage" disabled>
                    <label for="paralyzenull">Paralyze</label><input type="checkbox" id="paralyzenull" name="paralyzenull" value="paralyze" disabled>
                    <label for="bindnull">Bind</label><input type="checkbox" id="bindnull" name="bindnull" value="bind" disabled>
                    <label for="miasmanull">Miasma</label><input type="checkbox" id="miasmanull" name="miasmanull" value="miasma" disabled>        
                    <label for="shocknull">Shock</label><input type="checkbox" id="shocknull" name="shocknull" value="shock" disabled>
            </details>   
            
            <hr>
            
            <details>
                <summary>Weapon Affinity</summary>
                    <label for="fireweaponaff">Fire affinity</label><input type="checkbox" id="fireweaponaff" name="fireweaponaff" value="fireweapon" disabled>
                    <label for="iceweaponaff">Ice affinity</label><input type="checkbox" id="iceweaponaff" name="iceweaponaff" value="iceweapon" disabled>
                    <label for="elecweaponaff">Electric affinity</label><input type="checkbox" id="elecweaponaff" name="elecweaponaff" value="elecweapon" disabled>
                    <label for="forceweaponaff">Force affinity</label><input type="checkbox" id="forceweaponaff" name="forceweaponaff" value="forceweapon" disabled>
                    <label for="expelweaponaff">Expel affinity</label><input type="checkbox" id="expelweaponaff" name="expelweaponaff" value="expelweapon" disabled>
                    <label for="deathweaponaff">Death affinity</label><input type="checkbox" id="deathweaponaff" name="deathweaponaff" value="deathweapon" disabled>
                    <label for="magicweaponaff">Magic affinity</label><input type="checkbox" id="magicweaponaff" name="magicweaponaff" value="magicweapon" disabled>
                    <label for="mindweaponaff">Mind affinity</label><input type="checkbox" id="mindweaponaff" name="mindweaponaff" value="mindweapon" disabled>
                    <label for="nerveweaponaff">Nerve affinity</label><input type="checkbox" id="nerveweaponaff" name="nerveweaponaff" value="nerveweapon" disabled>
            </details>

        </div>
        
        <div id="demon_stats">
            <details>
                <summary>Demon General Stats</summary>
                        <input type="text" id="demonstr" name="demonstr" readonly><label for="demonstr" >Demon Strength</label>
                        <input type="text" id="demonmag" name="demonmag" readonly><label for="demonmag">Demon Magic</label><input type="text" id="demonspd" name="demonspd" readonly><label for="demonspd">Demon Speed</label>
                        <input type="text" id="demonvit" name="demonvit" readonly><label for="demonvit">Demon Vitality</label>
                        <input type="text" id="demonint" name="demonint" readonly><label for="demonint">Demon Intelligence</label>
                        <input type="text" id="demonluc" name="demonluc" readonly><label for="demonluc">Demon Luck</label>
                        <input type="text" id="demonclsrng" name="demonclsrng" readonly><label for="clsrng">Demon Close Range</label>
                        <input type="text" id="demonlngrng" name="demonlngrng" readonly><label for="demonlngrng">Demon Long Range</label>
                        <input type="text" id="demonspell" name="demonspell" readonly><label for="demonspell">Demon Spell</label>
                        <input type="text" id="demonsupport" name="demonsupport" readonly><label for="demonsupport">Demon Support</label>
                        <input type="text" id="demonphydef" name="demonphydef" readonly><label for="demonphydef">Demon Physical Defense</label>
                        <input type="text" id="demonmagdef" name="demonmagdef" readonly><label for="demonmagdef">Demon Magical Defense</label>
                        <input type="text" id="demonmaxhp" name="demonmaxhp" readonly><label for="demonmaxhp">Demon Max HP</label>
                        <input type="text" id="demonmaxmp" name="demonmaxmp" readonly><label for="demonmaxmp">Demon Max MP</label>
                        <input type="text" id="demonhpregenflat" name="demonhpregenflat" readonly><label for="demonhpregenflat">Demon Flat HP Regeneration</label>
                        <input type="text" id="demonmpregenflat" name="demonmpregenflat" readonly><label for="demonmpregenflat">Demon Flat MP Regeneration</label>
            </details>

            <hr>

            <details>
                <summary>Demon General Damage</summary>
                    <input type="text" id="demoncdr" name="demoncdr" readonly><label for="demoncdr">Demon Cooldown Reduction</label>
                    <input type="text" id="demongnrdmg" name="demongnrdmg" readonly><label for="demongnrdmg">Demon General Damage</label>
                    <input type="text" id="demonclsrngdmg" name="demonclsrngdmg" readonly><label for="demonclsrngdmg">Demon Close Range Damage</label>
                    <input type="text" id="demonlngrngdmg" name="demonlngrngdmg" readonly><label for="demonlngrngdmg">Demon Long Range Damage</label>
                    <input type="text" id="demonspelldmg" name="demonspelldmg" readonly><label for="demonspelldmg">Demon Spell Damage</label>
                    <input type="text" id="demongnrdmgred" name="demongnrdmgred" readonly><label for="demongnrdmgred">Demon General Damage Reduction</label>
                    <input type="text" id="demonlbchance" name="demonlbchance" readonly><label for="demonlbchance">Demon Limit Break Chance</label>
                    <input type="text" id="demonlbpower" name="demonlbpower" readonly><label for="demonlbpower">Demon Limit Break Power</label>
                    <input type="text" id="demontachance" name="demontachance" readonly><label for="demontachance">Demon Technical Attack Chance</label>
                    <input type="text" id="demontapower" name="demontapower" readonly><label for="demontachance">Demon Technical Attack Power</label>
                    <input type="text" id="demonpursuitchance" name="demonpursuitchance" readonly><label for="demonpursuitchance">Demon Pursuit Chance</label>
                    <input type="text" id="demonpursuitpower" name="demonpursuitpower" readonly><label for="demonpursuitpower">Demon Pursuit Power</label>
                    <input type="text" id="demoncritical" name="demoncritical" readonly><label for="demoncritical">Demon Critical</label>
                    <input type="text" id="demonfcc" name="demonfcc" readonly><label for="demonfcc">Demon Final Critical Correction</label>
                    <input type="text" id="demonrush" name="demonrush" readonly><label for="demonrush">Demon Rush</label>
                    <input type="text" id="demonspin" name="demonspin" readonly><label for="demonspin">Demon Spin</label>
                    <input type="text" id="demonrapid" name="demonrapid" readonly><label for="demonrapid">Demon Rapid</label>
                    <input type="text" id="demonfireboost" name="demonfireboost" readonly><label for="demonfireboost">Demon Fire Boost</label>
                    <input type="text" id="demoniceboost" name="demoniceboost" readonly><label for="demoniceboost">Demon Ice Boost</label>
                    <input type="text" id="demonelecboost" name="demonelecboost" readonly><label for="demonelecboost">Demon Elec Boost</label>
                    <input type="text" id="demonforceboost" name="demonforceboost" readonly><label for="demonforceboost">Demon Force Boost</label>
                    <input type="text" id="demoncuraboost" name="demoncuraboost" readonly><label for="demoncuraboost">Demon Curative Boost</label>
                    <input type="text" id="demonslashboost" name="demonslashboost" readonly><label for="demonslashboost">Demon Slash Boost</label>
                    <input type="text" id="demonalmightyboost" name="demonalmightyboost" readonly><label for="demonalmightyboost">Demon Almighty Boost</label>
                    <input type="text" id="demonspinhpcost" name="demonspinhpcost" readonly><label for="demonspinhpcost">Demon Spin HP Cost</label>
                    <input type="text" id="demonspinmpcost" name="demonspinmpcost" readonly><label for="demonspinmpcost">Demon Spin MP Cost</label>
                    <input type="text" id="demonexperience" name="demonexperience" readonly><label for="demonexperience">Demon Experience</label>
            </details>

            <hr>
            
        </div> 

        <div id="party_stats">
            <details>
                <summary>Party Stats</summmary>
                    <input type="text" id="partystr" name="partystr" readonly><label for="partystr">Party Strength</label>
                    <input type="text" id="partymag" name="partymag" readonly><label for="partymag">Party Magic</label>
                    <input type="text" id="partyvit" name="partyvit" readonly><label for="partyvit">Party Vitality</label>
                    <input type="text" id="partyint" name="partyint" readonly><label for="partyint">Party Intelligence</label>
                    <input type="text" id="partyspd" name="partyspd" readonly><label for="partyspd">Party Speed</label>
                    <input type="text" id="partyluc" name="partyluc" readonly><label for="partyluc">Party Luck</label>
                    <input type="text" id="partyclsrng" name="partyclsrng" readonly><label for="partyclsrng">Party Close Range</label>
                    <input type="text" id="partyphydef" name="partyphydef" readonly><label for="partyphydef">Party Physical Defense</label>
                    <input type="text" id="partyxp" name="partyxp" readonly><label for="partyxp">Party Experience</label>
            </details>

            <hr>
        </div>

        <script>

        function testeOp(){
            if(url.includes('?')){
                inicializar(), calcularPeloLink();
            } else {
                inicializar();
            }
        }

        function calcularPeloLink(){
            const url = window.location.href;

            if(url.includes('?')){
                var div = document.getElementById("equipment");
                var inputs = div.querySelectorAll("input");

                var array = <?php echo json_encode($_GET) ?>;
                var stringzado = JSON.stringify(array);
                console.log(stringzado);

                Object.entries(array).forEach(([key, val]) => {
                    console.log(key);
                    console.log(val);
                    if(val!=''&&val!=null){
                        document.getElementById(key).value = val;
                        //selecionarActionTarot(key, val);
                        calcularTarot(key);
                        console.log('Entrei no calculo pelo link');
                    }
                });
            }
        }
        </script>
    </body>
</html>