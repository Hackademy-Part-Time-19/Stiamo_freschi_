<div class="cardLayout">
    <div class="imgCard">
        <img src="https://images1.vinted.net/t/02_0126f_7UxTSDC7QPA9b5SwtpjvXi9K/f800/1710953115.jpeg?s=2b251215e7d94314a9ffa97432a4b9413faa19e3" alt="">
    </div>
    <div class="userCard">
        <div class="imageUser">
            <img src="https://banner2.cleanpng.com/20180508/toe/kisspng-user-profile-computer-icons-clip-art-5af1ac8cee74c6.8111281615257877889767.jpg" alt="">
        </div>
        <div class="nomeUser">
            <p>{{$user}}</p>
        </div>
    </div>
    <div class="prezzoCard">
        <h4>{{$title}}</h4>
        <p>{{$price}} €</p>
        <h6>{{$category}}</h6>
    </div>
    
    <div class="descrizioneCard">
        <p>{{$description}}</p>
    </div>

    <div class="Areabutton">
        
        <button class="btnCardLayout"><a style="color: white" href="{{route('announcement.show', ['announcement' => $announcement] )}}">Vai al dettaglio</a></button>
    </div>

    
</div>
