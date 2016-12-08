<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no">
<title>集装箱布局3D演示</title>
<style>
body
{
	font-family:'微软雅黑';
	background-color:#333;
	margin:0px;
	overflow:hidden;
	color:#CCC;
}
#object_info
{
	display:none;
}
#container_info
{
	display:none;
}
#information
{
	position:absolute;
	left:20px;
}
#deleteBtn
{
	width:80px;
	height:40px;
	background-color:#666;
	color:#CCC;
	border-radius:9px;
	box-shadow:0px 0px 15px #000;
	text-align:center;
	font-size:29px;
	margin:20px;
	padding:5px;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
	-o-transition: all 0.5s;
	-ms-transition: all 0.5s;
	cursor:pointer;
	opacity:0;
	visibility:hidden;
}
#deleteBtn:hover
{
	background:#CCC;
	color:#666;
	box-shadow:0px 0px 15px #FFF;
}
.btn
{
	float:left;
	background-color:#666;
	color:#CCC;
	border-radius:9px;
	box-shadow:0px 0px 15px #000;
	text-align:center;
	font-size:29px;
	margin:20px;
	padding:5px;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
	-o-transition: all 0.5s;
	-ms-transition: all 0.5s;
	cursor:pointer;
}
.btn:hover
{
	background:#CCC;
	color:#666;
	box-shadow:0px 0px 15px #FFF;
}
#function
{
	position:absolute;
	bottom:20px;
	left:20px;
}
#add
{
	float:left;
	width:200px;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
	-o-transition: all 0.5s;
	-ms-transition: all 0.5s;
	visibility:hidden;
	opacity:0;
}
#add p
{
	font-size:25px;
}
#hint
{
	border:#CCC 2px solid;
	border-radius:5px;
	width:120px;
	height:100px;
	padding:10px;
	background-color:rgba(255,255,255,0.5);
	color:#333;
	visibility:hidden;
	opacity:0;
	position:absolute;
	-webkit-transition: all 0.2s;
	-moz-transition: all 0.2s;
	-o-transition: all 0.2s;
	-ms-transition: all 0.2s;
}
#mask
{
	width: 100%;
	height: 100%;
	position: fixed;
	background: rgba(255, 255, 255, 0.8);
	z-index: 10;
	color: #fff;
	font-size: 30px;
	display: none;
}
#mask > div
{
	width: 500px;
	height: 200px;
	position: absolute;
	top: 50%;
	left: 50%;
	margin-top: -100px;
	margin-left: -250px;
	background: rgba(0, 0, 0, 0.5);
	border-radius: 10px;
}
#mask > div > p
{
	text-align: center;
	padding: 20px;
	margin: 30px 0;
}
</style>
</head>

<body>
	<div id="mask">
		<div class="maskContent">
			<p>您所使用的浏览器不支持WEBGL功能, 请使用<a href="http://www.google.cn/intl/zh-CN/chrome/browser/">谷歌浏览器.</a></p>
		</div>
	</div>
	<div id="information">
    		<h1>集装箱布局3D演示</h1>
            <p>
                物体信息:<br>
                长度:<span id="container_length"></span>
                宽度:<span id="container_width"></span>
                高度:<span id="container_height"></span>
            </p>
            <label>
                <input type="checkbox" id="toggle_container" checked> 开启集装箱显示<br>
                ( 提示 : 开启集装箱显示时<br>物体信息为集装箱外壳信息 )
            </label>
            <div id="deleteBtn"> 删除 </div>
    </div>
    <div id="function">
    	<div id="deleteAll" class="btn"> 删除所有 </div>
        <div id="add">
        	<div id="addItem" class="btn"> 添加 </div>
            <p><input type="checkbox" id="toggle_autoadd" checked>自动</p>
        </div>
    </div>
    <div id="hint">
    	<table>
        	<tr>
            	<th colspan="2">物体信息</th>
            </tr>
            <tr>
            	<td>长度:</td><td id="hint_length"></td>
            </tr>
            <tr>
            	<td>宽度:</td><td id="hint_width"></td>
            </tr>
            <tr>
            	<td>高度:</td><td id="hint_height"></td>
            </tr>            
        </table>
    </div>
	<table id="object_info">
    	<tr>
        	<th>ObjectNo</th>
            <th>BoxNo</th>
            <th>P_x</th>
            <th>P_y</th>
            <th>P_z</th>
            <th>P_length</th>
            <th>P_width</th>
            <th>P_height</th>
        </tr>
<?php
	$conn = mysql_connect('localhost','root','');
	mysql_select_db('webgl_container',$conn);
	$query = mysql_query('SELECT * FROM solutioninfo');
	while($row = mysql_fetch_assoc($query))
	{
?>
		<tr id="<?php echo $row['ObjectNo']; ?>">
        	<td><?php echo $row['ObjectNo']; ?></td>
            <td><?php echo $row['BoxNo']; ?></td>
            <td><?php echo $row['P_x']; ?></td>
            <td><?php echo $row['P_y']; ?></td>
            <td><?php echo $row['P_z']; ?></td>
            <td><?php echo $row['P_length']; ?></td>
            <td><?php echo $row['P_width']; ?></td>
            <td><?php echo $row['P_height']; ?></td>
        </tr>
<?php			
	}
?>        
    </table>
    <table id="container_info">
    	<tr>
        	<td>ContainerID</td>
            <td>ContainerLength</td>
            <td>ContainerWidth</td>
            <td>ContainerHeight</td>
        </tr>
<?php
	$query = mysql_query('SELECT * FROM containerinfo');
	while($row = mysql_fetch_assoc($query))
	{
?>
		<tr id="container_<?php echo $row['ContainerID']?>">
        	<td><?php echo $row['ContainerID']?></td>
            <td><?php echo $row['ContainerLength']?></td>
            <td><?php echo $row['ContainerWidth']?></td>
            <td><?php echo $row['ContainerHeight']?></td>
        </tr>
<?php	
	}
?>
    </table>
<script src="js/three.min.js"></script>
<script>
	if(!window.WebGLRenderingContext)
	{
		document.getElementById('mask').style.display = 'block';
	}
</script>
<script>
	//屏蔽选择
	document.onselectstart = function (event)
	{
		event.returnValue = false;
	};
	var container;
	var camera,scene,projector,renderer;
	
	var mouse = { x: 0, y: 0 }, INTERSECTED;
	var mouseClick = { x: 0, y: 0 };	//在点击时固定鼠标位置,使拾取立方体保持高亮状态
	
	var mouse_down = false;
	
	var camera_x,camera_y,camera_z;
	
	var main_object;
	
	init();
	animate();
	
	function init()
	{
		container = document.createElement('div');
		document.body.appendChild(container);
		
		camera = new THREE.PerspectiveCamera(45,window.innerWidth / window.innerHeight,1,10000);
		camera.position.set(700,-700,600);		//相机位置需要设置的合适..否则可能导致看不到生成物体..
		camera.up.set(0,0,1);
		camera_x = parseFloat(document.getElementById('container_01').childNodes[3].innerHTML)*0.5;
		camera_y = -parseFloat(document.getElementById('container_01').childNodes[5].innerHTML)*0.5;
		camera_z = parseFloat(document.getElementById('container_01').childNodes[7].innerHTML)*0.5;
		camera.lookAt({x:camera_x,y:camera_y,z:camera_z});
		
		scene = new THREE.Scene();
		
		var light = new THREE.DirectionalLight(0xffffff,2);
		light.position.set(1,1,1).normalize();
		scene.add(light);
		
		light = new THREE.DirectionalLight(0xffffff);
		light.position.set(-1,-1,-1).normalize();
		scene.add(light);
		/*-----   建立容器0P   -----*/
		var geometry = new THREE.CubeGeometry(1,1,1);
		var material = new THREE.MeshLambertMaterial({color:0xffffff,opacity:0.7,wireframe:true});		
		main_object= new THREE.Mesh(geometry,material);
		var container_length = parseFloat(document.getElementById('container_01').childNodes[3].innerHTML);
		var container_width = parseFloat(document.getElementById('container_01').childNodes[5].innerHTML);
		var container_height = parseFloat(document.getElementById('container_01').childNodes[7].innerHTML);
		container_length+=4;
		container_width+=4;
		container_height+=4;
		main_object.scale.x = container_length;
		main_object.scale.y = container_width;
		main_object.scale.z = container_height;
		var container_x = parseFloat(container_length)*0.5;
		var container_y = -parseFloat(container_width)*0.5;
		var container_z = parseFloat(container_height)*0.5;
//		console.log(container_x+' '+container_y+' '+container_z);
		container_x-=2;
		container_y+=2;
		container_z-=2;
		main_object.position.set(container_x,container_y,container_z);
		scene.add(main_object);
		/*-----   建立容器ED   -----*/
		/*-----   标识原点0P   -----*/	
		geometry = new THREE.CubeGeometry(0.5,0.5,0.5);
		material = new THREE.MeshLambertMaterial({color:0xff0000});
		var object = new THREE.Mesh(geometry,material);
		object.position.set(0,0,0);
		scene.add(object);
		/*-----   标识原点ED   -----*/
		/*-----   建立物体OP   -----*/
		var table_row;	//在for的循环判定条件中不能声明变量(var)
		for(var i=1;table_row = document.getElementById(i);i++)
		{
			var x = table_row.childNodes[5].innerHTML;
			var y = -table_row.childNodes[7].innerHTML;	//修正坐标
			var z = table_row.childNodes[9].innerHTML;
			var length = table_row.childNodes[11].innerHTML;
			var width = table_row.childNodes[13].innerHTML;
			var height = table_row.childNodes[15].innerHTML; 
//			console.log(x+' '+y+' '+z+' '+length+' '+width+' '+height);
			object = new THREE.Mesh(
				new THREE.CubeGeometry(1,1,1),
				new THREE.MeshLambertMaterial({color:Math.random()*0xffffff})
			);
			object.scale.x = length;
			object.scale.y = width;
			object.scale.z = height;
//			console.log(x+(length*0.5));
			x = parseFloat(x)+(parseFloat(length)*0.5);
			y = parseFloat(y)-(parseFloat(width)*0.5);	//修正坐标
			z = parseFloat(z)+(parseFloat(height)*0.5);
			object.position.set(x,y,z);
			
			scene.add(object);
		}
		/*-----   建立物体ED   -----*/
		renderer = new THREE.WebGLRenderer({antialias:true});
		renderer.setSize(window.innerWidth,window.innerHeight);
		
		container.appendChild(renderer.domElement);
		projector = new THREE.Projector();
		renderer.render(scene,camera);
		
		document.addEventListener( 'mousemove', onDocumentMouseMove, false );
		document.addEventListener( 'mousedown', onDocumentMouseDown, false );
		document.addEventListener( 'mouseup', onDocumentMouseUp, false );
		window.addEventListener( 'resize', onWindowResize, false );
		document.getElementById('toggle_container').addEventListener('change',onToggleChange,false);
//		alert('execute');
	}
	
	function animate()
	{
		requestAnimationFrame(animate);
		render();	
	}
	
	function render()
	{
				var vector = new THREE.Vector3( mouseClick.x, mouseClick.y, 1 );
				projector.unprojectVector( vector, camera );

				var ray = new THREE.Ray( camera.position, vector.subSelf( camera.position ).normalize() );

				var intersects = ray.intersectObjects( scene.children );

				if ( intersects.length > 0 ) {

					if ( INTERSECTED != intersects[ 0 ].object ) {

						if ( INTERSECTED ) INTERSECTED.material.emissive.setHex( INTERSECTED.currentHex );

						INTERSECTED = intersects[ 0 ].object;
						INTERSECTED.currentHex = INTERSECTED.material.emissive.getHex();
						INTERSECTED.material.emissive.setHex( 0xff0000 );
						document.getElementById('container_length').innerHTML = INTERSECTED.scale.x;
						document.getElementById('container_width').innerHTML = INTERSECTED.scale.y;
						document.getElementById('container_height').innerHTML = INTERSECTED.scale.z;
						document.getElementById('hint_length').innerHTML = INTERSECTED.scale.x;
						document.getElementById('hint_width').innerHTML = INTERSECTED.scale.y;
						document.getElementById('hint_height').innerHTML = INTERSECTED.scale.z;
					}

				} else {

					if ( INTERSECTED ) INTERSECTED.material.emissive.setHex( INTERSECTED.currentHex );

					INTERSECTED = null;

				}

				renderer.render( scene, camera );
//				console.log('animate');
			
	}
	function onDocumentMouseMove(event) {

		event.preventDefault();
		
		var old_mouseX = mouse.x;
		var old_mouseY = mouse.y;
		
		var radius = 700*Math.sqrt(2);
//		console.log(radius);
		//拾取不用后面移动也需要用
		mouse.x = (event.clientX/window.innerWidth)*2-1;
		mouse.y = -(event.clientY/window.innerHeight)*2+1;
//		console.log('move:'+mouse.x+' '+mouse.y);
		if(!deleteBtnOn)
		{
			mouseClick.x = (event.clientX/window.innerWidth)*2-1;
			mouseClick.y = -(event.clientY/window.innerHeight)*2+1;
			
			document.getElementById('hint').style.top = event.clientY + 20 + 'px';
			document.getElementById('hint').style.left = event.clientX + 20 + 'px';
			
			if(mouse_down)
			{
				var displace = mouse.x - old_mouseX;
	//			console.log(typeof camera.position.y);
				var old_sinTheta = camera.position.y/radius;
				var old_cosTheta = camera.position.x/radius;
				console.log(old_sinTheta+'A:'+Math.asin(old_sinTheta));
				console.log(old_cosTheta+'B:'+-Math.acos(old_cosTheta));
				
				//水平移动
				if(camera.position.x>=0&&camera.position.y>0)	//第一象限
				{
	//				alert('1');
					var theta = Math.asin(old_sinTheta);
					theta -= displace;
				}
				if(camera.position.x<0&&camera.position.y>=0)	//第二象限
				{
	//				alert('2');
					var theta = Math.PI - Math.asin(old_sinTheta);
					theta -= displace;
				}
				if(camera.position.x<=0&&camera.position.y<0)	//第三象限
				{
	//				alert('3');
					var theta = Math.PI - Math.asin(old_sinTheta);
					theta -= displace;
				}
				if(camera.position.x>0&&camera.position.y<=0)	//第四象限
				{
	//				alert('4')
					var theta = Math.asin(old_sinTheta);
					theta -= displace;
				}
				
				//垂直移动
				var displaceY = mouse.y - old_mouseY;
				console.log(displaceY);
				camera.position.z -= displaceY * 500;
				
				camera.position.x = radius*Math.cos(theta);
				camera.position.y = radius*Math.sin(theta);
				camera.lookAt({x:camera_x,y:camera_y,z:camera_z});
			}
		}
		//显示提示
		if(!INTERSECTED)
		{
			document.getElementById('hint').style.opacity = '0';
			document.getElementById('hint').style.visibility = 'hidden';
		}
		else
		{
			document.getElementById('hint').style.opacity = '1';
			document.getElementById('hint').style.visibility = 'visible';			
		}
	}
	
	function onWindowResize() 
	{
		camera.aspect = window.innerWidth/window.innerHeight;
		camera.updateProjectionMatrix();

		renderer.setSize(window.innerWidth,window.innerHeight);
		renderer.render(scene,camera);
	}
	
	var deleteBtnOn = false;	//测试按钮开关
	function onDocumentMouseDown(event)
	{
		mouse_down = true;
		//产生删除按钮START
		var TEMP = INTERSECTED;	//此时还未刷新X,Y指向之前的位置,即鼠标点击之前的位置
		mouseClick.x = (event.clientX/window.innerWidth)*2-1;
		mouseClick.y = -(event.clientY/window.innerHeight)*2+1;	
		
		if(event.target == document.getElementById('deleteBtn'))
		{
			scene.remove(TEMP);
			console.log(scene);	
		}
		
		setTimeout(function ()
		{
			console.log('INTERSECTED:'+INTERSECTED);
			if(INTERSECTED)
			{
				deleteBtnOn = true;	
				var deleteBtn = document.getElementById('deleteBtn');
				deleteBtn.style.opacity = '1';
				deleteBtn.style.visibility = 'visible';	
							
			}
			else
			{
				deleteBtnOn = false;
				var deleteBtn = document.getElementById('deleteBtn');
				deleteBtn.style.opacity = '0';
				deleteBtn.style.visibility = 'hidden';			
			}	
		},15);
		//使用延时是因为直接点击改变mouseClick的位置之后过一段时间之后才会刷新INTERSECT,这样就需要在刷新之后再判断关闭删除按钮
		//产生删除按钮STOP	
	}
	function onDocumentMouseUp(event)
	{
		mouse_down = false;
	}
	function onToggleChange()
	{
		//document.getElementById('toggle_container').checked显示的是点击后的结果,即原来选中点击出发change事件然后调用checked属性显示的是false
		if(!document.getElementById('toggle_container').checked)
		{
			scene.remove(main_object);	
		}
		else
		{
			scene.add(main_object);	
		}		
	}
	//编写FUNCTION 清空和添加
	document.getElementById('deleteAll').addEventListener('click', deleteAll, false);
	function deleteAll()
	{
		console.log('REMOVE'+scene.children.length);
		var objNum = scene.children.length;	//scene.children.length动态的不用于循环
		for(var i = 4; i < objNum; i++)
		{
			scene.remove(scene.children[4]);
			console.log(objNum + ' ' + i);
		}
		document.getElementById('add').style.visibility = 'visible';
		document.getElementById('add').style.opacity = '1';
		document.getElementById('toggle_container').checked = false;
		document.getElementById('deleteAll').style.visibility = 'hidden';
		document.getElementById('deleteAll').style.opacity = '0';
	}
	document.getElementById('addItem').addEventListener('click', addItem, false);
	var itemNum = 1;
	function addItem()
	{
		console.log('ADD');
		if(!document.getElementById('toggle_autoadd').checked)
		{
			var table_row = document.getElementById(itemNum);
			if(table_row)
			{
				getData(table_row);
				itemNum++;
			}
			else
			{
				itemNum = 1;
				document.getElementById('add').style.visibility = 'hidden';		//hidden可以屏蔽事件!!!
				document.getElementById('add').style.opacity = '0';
				document.getElementById('deleteAll').style.visibility = 'visible';
				document.getElementById('deleteAll').style.opacity = '1';
			}
		}
		else
		{
			document.getElementById('add').style.visibility = 'hidden';		//hidden可以屏蔽事件!!!
			document.getElementById('add').style.opacity = '0';	
			setTimeout(autoLoop, 150);
			function autoLoop()
			{
				var table_row = document.getElementById(itemNum);
				if(table_row)
				{
					getData(table_row);
					itemNum++;
					setTimeout(autoLoop, 150);
				}
				else
				{
					itemNum = 1;
					document.getElementById('deleteAll').style.visibility = 'visible';
					document.getElementById('deleteAll').style.opacity = '1';
				}
			}
		}
		function getData(table_row)
		{
			var x = table_row.childNodes[5].innerHTML;
			var y = -table_row.childNodes[7].innerHTML;	//修正坐标
			var z = table_row.childNodes[9].innerHTML;
			var length = table_row.childNodes[11].innerHTML;
			var width = table_row.childNodes[13].innerHTML;
			var height = table_row.childNodes[15].innerHTML; 
//			console.log(x+' '+y+' '+z+' '+length+' '+width+' '+height);
			object = new THREE.Mesh(
				new THREE.CubeGeometry(1,1,1),
				new THREE.MeshLambertMaterial({color:Math.random()*0xffffff})
			);
			object.scale.x = length;
			object.scale.y = width;
			object.scale.z = height;
//			console.log(x+(length*0.5));
			x = parseFloat(x)+(parseFloat(length)*0.5);
			y = parseFloat(y)-(parseFloat(width)*0.5);	//修正坐标
			z = parseFloat(z)+(parseFloat(height)*0.5);
			object.position.set(x,y,z);
			
			scene.add(object);	
		}
	}
</script>
</body>
</html>