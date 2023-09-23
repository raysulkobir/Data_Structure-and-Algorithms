A linked list is a linear data structure where each element is a separate object. Each element (known as node) of a list is comprising of two items:

the data and
a reference to the next node.

The last node has a reference to null. The entry point into a linked list is called the head of the list. It should be noted that head is not a separate node, but the reference to the first node. If the list is empty then the head is a null reference.

Linked List

A linked list is a dynamic data structure. The number of nodes in a list is not fixed and can grow and shrink on demand. Any application which has to deal with an unknown number of objects can use a linked list.


Basic Operations:
Following are the basic operations supported by a list.

Insertion
In order to add data to the list, we would need to create a new node (to store the new piece of data), and then manipulate the links so that the chain would also include this new node.

In a single linked list, the insertion operation can be performed in three ways.

Inserting At Beginning of the list
Inserting At End of the list
Inserting At Specific location in the list


Deletion
Searching and deletion operations are related by the fact that in order to delete an item from the list, it must first be found. Deletion of nodes relies on manipulating the links between data items so one is 'left out' of the chain - so it is then deleted by the garbage collector or the memory can be freed by the code itself.

In a single linked list, the deletion operation can be performed in three ways.

Deleting from Beginning of the list
Deleting from End of the list
Deleting a specific node


In order to search through the list (to find a piece of data, or an insertion point for some new data), the only option is to traverse through the data one by one, from the start. This is known as a linear search. More efficient search techniques (such as the binary search) cannot be performed, as the link structure between data forces sequential access.

Searching

The step-by-step algorithm to search is, starting at the first data node, and comparing the search key with the corresponding data in the node:

if the data matches, the search is complete.
if there is no match, move to the next node and repeat;
If the next reference is null, the end of the list has been reached; therefore, the data does not exist in the list. The algorithm can now terminate.


Complexity Analysis
Indexing - O(n)
Search - O(n)
Insertion
at beginning - O(1)
at end - O(n)
in middle - Searching O(n) + insertion O(1)
Deletion
at beginning- O(1)
at end - O(n)
in middle - Searching O(n) and deletion O(1)
Space - O(n)




Doubly Linked List
In a single linked list, every node has link to its next node in the sequence. So, we can traverse from one node to other node only in one direction and we can not traverse back.

Double linked list is a sequence of elements in which every element has links to its previous element and next element in the sequence.

Doubly Linked List

In double linked list, every node has link to its previous node and next node. So, we can traverse forward by using next field and can traverse backward by using previous field.

Doubly Linked List Implementation is almost same as the Singly Linked List except the places where we can use the facility of the Double Pointers (next and prev). In every operations we need to be careful about updating both of them.


In single linked list, every node points to its next node in the sequence and the last node points NULL. But in circular linked list, every node points to its next node in the sequence but the last node points to the first node in the list. That means circular linked list is similar to the single linked list except that the last node points to the first node in the list.

Circular Linked List

Circular lists are useful in applications to repeatedly go around the list (implementing round-robin algorithms). For example, when multiple applications are running on a PC, it is common for the operating system to put the running applications on a list and then to cycle through them, giving each of them a slice of time to execute, and then making them wait while the CPU is given to another application. It is convenient for the operating system to use a circular list so that when it reaches the end of the list it can cycle around to the front of the list.


Advantages of Linked list
The advantages of using the Linked list are given as follows -

Dynamic data structure - The size of the linked list may vary according to the requirements. Linked list does not have a fixed size.
Insertion and deletion - Unlike arrays, insertion, and deletion in linked list is easier. Array elements are stored in the consecutive location, whereas the elements in the linked list are stored at a random location. To insert or delete an element in an array, we have to shift the elements for creating the space. Whereas, in linked list, instead of shifting, we just have to update the address of the pointer of the node.
Memory efficient - The size of a linked list can grow or shrink according to the requirements, so memory consumption in linked list is efficient.
Implementation - We can implement both stacks and queues using linked list.
Disadvantages of Linked list
The limitations of using the Linked list are given as follows -

Memory usage - In linked list, node occupies more memory than array. Each node of the linked list occupies two types of variables, i.e., one is a simple variable, and another one is the pointer variable.
Traversal - Traversal is not easy in the linked list. If we have to access an element in the linked list, we cannot access it randomly, while in case of array we can randomly access it by index. For example, if we want to access the 3rd node, then we need to traverse all the nodes before it. So, the time required to access a particular node is large.
Reverse traversing - Backtracking or reverse traversing is difficult in a linked list. In


Operations performed on Linked list
The basic operations that are supported by a list are mentioned as follows -


Insertion - This operation is performed to add an element into the list.
Deletion - It is performed to delete an operation from the list.
Display - It is performed to display the elements of the list.
Search - It is performed to search an element from the list using the given key.