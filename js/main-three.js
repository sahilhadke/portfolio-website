console.clear();
import * as THREE from "https://cdn.skypack.dev/three@0.132.2/build/three.module.js";

import {OrbitControls} from "https://cdn.skypack.dev/three@0.132.2/examples/jsm/controls/OrbitControls.js";


const scene = new THREE.Scene();

const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000);

const renderer = new THREE.WebGL1Renderer({
  canvas: document.getElementById('bg'),
})


// const controls = new OrbitControls(camera, renderer.domElement);


renderer.setPixelRatio( window.devicePixelRatio);

renderer.setSize(window.innerWidth, window.innerHeight);

camera.position.setZ(30);

const geometry = new THREE.TorusGeometry(10, 3, 8, 50);

const material = new THREE.MeshStandardMaterial({
  color: 0xbf95d4
});

const torus = new THREE.Mesh( geometry, material);

torus.position.x +=20;
torus.position.y +=5;

// scene.add(torus);

const pointLight = new THREE.PointLight(0xd8bfe5);
pointLight.position.set(20,5,5);

const ambientLight = new THREE.AmbientLight(0xffffff);
scene.add(pointLight, ambientLight);
// scene.add(pointLight);

const gridHelper = new THREE.GridHelper(200, 10);
const lightHelper = new THREE.PointLightHelper(pointLight)
// scene.add(lightHelper, gridHelper);


const addStar = () => {
  const geometry = new THREE.SphereGeometry(0.10, 24, 24);
  const material = new THREE.MeshStandardMaterial({
    color: 0xffffff
  })

  const star = new THREE.Mesh(geometry, material);
  const [x,y,z] = Array(3).fill().map(()=>{
    return THREE.MathUtils.randFloatSpread( 200 );
  });

  star.position.set(x,y,z);
  scene.add(star);
}

Array(800).fill().forEach(addStar);

// const spaceTexture = new THREE.TextureLoader().load('images/dark-space.jpg')
// scene.background = spaceTexture;


  // torus.rotation.x += 0.01;

  // torus.rotation.x += 100;
  // torus.rotation.z += 0.01;



function moveCam(){
  const t = document.body.getBoundingClientRect().top;
  // torus.rotation.x += 0.05;
  // torus.rotation.y += 0.05;
  // torus.rotation.z += 0.05;

// torus.position.y = t * +0.05;

  camera.position.z = t * -0.02;
  camera.position.y = t * +0.02;
}

document.body.onscroll = moveCam

function animate(){
  requestAnimationFrame(animate);

  // torus.rotation.x += 0.01;
  // torus.rotation.y += 0.01;
  // torus.rotation.z += 0.01;



  // controls.update();


  renderer.render(scene, camera);

}

animate()