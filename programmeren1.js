let colour: number = 0 //kleur lampjes RGB
let kleuren: string[] = [] //welke kleuren zijn er aan geweest?
let brightnessLamp: number = 0 //bepaald brightness lamp
let aantalLampen: number = 0   //bepaald hoeveel lampen er aan zijn

function loudSound() { //bij een luid geluid gaan de ledjes (even) uit
    input.onLoudSound(function () {
        light.clear()
    })
}

function accel() { //deze functie meet de versnelling links en rechts
    console.logValue("accel", input.acceleration(Dimension.X))
    pause(500)
    if (input.acceleration(Dimension.X) > 0) { //versnelling groter dan X (de as) maakt de ledjes rood

        colour = light.rgb(255, 0, 0)
        kleuren.push("ledjes zijn rood")
    }

    else if (input.acceleration(Dimension.X) < 0) {//versnelling kleiner dan X (de as) maakt de ledjes blauw

        colour = light.rgb(0, 0, 255)
        kleuren.push("ledjes zijn blauw")
    }
    else if (input.acceleration(Dimension.X) == 0) {//versnelling is 0 dan zijn de ledjes groen

        colour = light.rgb(0, 255, 0)
        kleuren.push("ledjes zijn groen")
    }

}

input.buttonA.onEvent(ButtonEvent.Click, function () { //druk je op knop A gaat de brightness met 1 omhoog
    brightnessLamp += 1 //min 3x indrukken
})

input.buttonB.onEvent(ButtonEvent.Click, function () { //druk je op knop B gaat +1 lampje aan
    aantalLampen += 1
})

function brightnessLampFunc() { //bepaald de brightness, eerst 3x indrukken voor de lampjes werken
    light.setBrightness(brightnessLamp)
    console.log(brightnessLamp)
}

function aantalLampenFunc() { //aantal lampjes wordt aangezet met for loop
    for (let a = 0; a < aantalLampen; a++) {
        console.log("aantal lampen")
        console.log(aantalLampen)
        light.setPixelColor(a, colour)
    }
}

forever(() => { //forever loop waar alle functies worden aangeroepen
    loudSound()
    aantalLampenFunc()
    brightnessLampFunc()
    accel()
    console.log(kleuren)
})
