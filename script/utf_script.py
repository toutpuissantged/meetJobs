#utf-8

filename='document.txt'
temp2=''
val_false=['Ã©']
#,'Ã¨'
val_true=['e']
fr=open(filename, 'r')
temp=fr.read()
fr.close()
execut=1
#print(temp)

for i in temp:
	if execut==1:
		if i in val_false[0]:
			cur_id=val_false.index('Ã©')
			i=val_true[cur_id]
			print('cath')
			execut=2 

		temp2+=i
		#print(i)
	else:
		execut=1
	

fw=open(filename, 'w')
fw.write(temp2)
fw.close()

print('finish')
print('è')
